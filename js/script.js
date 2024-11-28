/*
    ESTE ARQUIVO DEPENDE DOS PROTÓTIPOS.
*/

// IDs

class DateID {
    constructor(date = new Date) {
        if (!(date instanceof Date)) date = new Date();

        this.date = date;

        this.id = DateID.new(date);
    }

    [Symbol.toPrimitive](hint) {
        switch (hint) {
            case "string":
                return this.id;
            case "default":
                return this.id;
            case "number":
                return this.date.valueOf();
        }
    }

    toString() {
        return this.id;
    }

    valueOf() {
        return this.id;
    }

    static new(date = new Date) {
        if (!(date instanceof Date)) throw new Error('DateID.new: date precisa ser uma instância de `Date`.');

        let parts = [
            [
                date.getFullYear().toString().fillUntil("0", 4, 'before'),
                (date.getMonth() + 1).toString().fillUntil("0", 2, 'before'),
                date.getDate().toString().fillUntil("0", 2, 'before')
            ],
            [
                date.getHours().toString().fillUntil("0", 2, 'before'),
                date.getMinutes().toString().fillUntil("0", 2, 'before'),
                date.getSeconds().toString().fillUntil("0", 2, 'before'),
                date.getMilliseconds().toString().slice(0, 3).fillUntil("0", 3, 'before'),
            ]
        ]

        parts = parts.map(side => {
            return side.join('.');
        })

        return parts.join('-');
    }
}

// Links and Searchs

function createLink(destination) {
    return root_folder_link + destination;
}

function findByProperty(array, property, value) {
    let findIndex = -1;

    for (let i = 0; i < array.length; i++) {
        if (array[i][property] == value) {
            findIndex = i;
            break;
        }
    }

    return findIndex;
}

/**
 * Procura por um elemento ou conjunto.
 * @param {string} target 
 * @param {"id"|"class"|"tag"|"query"|"queryAll"} type 
 * @returns {HTMLElement|HTMLCollection|NodeList}
 */
function searchElement(target, type) {
    if (typeof target !== "string") throw new TypeError('searchElement: target precisa ser do tipo string.');
    if (target.isEmpty(' ')) throw new SyntaxError('searchElement: target precisa conter um valor válido.');
    if (typeof type !== "string") throw new TypeError('searchElement: type precisa ser do tipo string.');
    if (!type.isIn(['id', 'class', 'tag', 'query', 'queryAll'])) throw new SyntaxError('searchElement: type precisa ser "id", "class", "tag", "query" ou "queryAll"');

    switch (type) {
        default:
        case "id":
            return document.getElementById(target);
        case "class":
            return document.getElementsByClassName(target);
        case "tag":
            return document.getElementsByTagName(target);
        case "query":
            return document.querySelector(target);
        case "queryAll":
            return document.querySelectorAll(target);
    }
}

const HTML = searchElement('html', 'query');

function catchGetter(obj, property) {
    if (typeof obj !== "object") throw new TypeError("catchGetter: obj precisa ser um objeto.");
    if (!((typeof property).isIn(["string", "number", "symbol"]))) throw new TypeError("catchGetter: property precisa ser um índice de propriedade válido.");

    get = Object.getOwnPropertyDescriptor(obj, property).get;
    return get;
}

function catchSetter(obj, property) {
    if (typeof obj !== "object") throw new TypeError("catchSetter: obj precisa ser um objeto.");
    if (!((typeof property).isIn(["string", "number", "symbol"]))) throw new TypeError("catchSetter: property precisa ser um índice de propriedade válido.");

    set = Object.getOwnPropertyDescriptor(obj, property).set;
    return set;
}

// Themes and Colors

class PageTheme {
    /**
     * 
     * @param {string} name 
     * @param {{
     *      theme: string,
     *      color: string
     * }} config 
     */
    constructor(name, config) {
        if (typeof name !== "string" || name.isEmpty(' ')) name = DateID.new();
        this.name = name;
        if (typeof config !== "object") config = {}
        this.#config = config;

        if (typeof this.#config.theme !== "string") throw new TypeError('PageTheme constructor: config.theme precisa ser do tipo string.');
        if (this.#config.theme.isEmpty(' ')) throw new SyntaxError('PageTheme constructor: config.theme precisa conter um valor válido.');
        if (typeof this.#config.color !== "string") throw new TypeError('PageTheme constructor: config.color precisa ser do tipo string.');
        if (this.#config.color.isEmpty(' ')) throw new SyntaxError('PageTheme constructor: config.color precisa conter um valor válido.');

        if (findByProperty(PageTheme.ThemeList, 'name', this.theme) == -1) throw new ReferenceError(`PageTheme constructor: "${this.theme}" não foi encontrado na lista de temas.`);
        if (findByProperty(PageTheme.ColorList, 'name', this.color) == -1) throw new ReferenceError(`PageTheme constructor: "${this.color}" não foi encontrado na lista de cores.`);
    }

    #config = {};

    get theme() {
        return this.#config.theme;
    }

    get color() {
        return this.#config.color;
    }

    set theme(newTheme) {
        if (typeof newTheme !== "string") throw new TypeError('PageTheme theme: theme precisa ser do tipo string.');
        if (newTheme.isEmpty(' ')) throw new SyntaxError('PageTheme theme: theme precisa conter um valor válido.');
        if (findByProperty(PageTheme.ThemeList, 'name', newTheme) == -1) throw new ReferenceError(`"${newTheme}" não foi encontrado na lista de temas.`);
        this.#config.theme = newTheme;
    }

    set color(newColor) {
        if (typeof newColor !== "string") throw new TypeError('PageTheme color: color precisa ser do tipo string.');
        if (newColor.isEmpty(' ')) throw new SyntaxError('PageTheme color: color precisa conter um valor válido.');
        if (findByProperty(PageTheme.ColorList, 'name', newColor) == -1) throw new ReferenceError(`"${newColor}" não foi encontrado na lista de cores.`);
        this.#config.color = newColor;
    }

    applyTheme() {
        PageTheme.applyTheme(this.theme);
        PageTheme.applyColor(this.color);
    }

    toString() {
        return this.name;
    }

    [Symbol.toPrimitive](hint) {
        switch (hint) {
            case "default":
            case "string":
                return this.toString();
        }
    }

    static Theme = class Theme {
        constructor(name, base, filters, grey, reverse) {
            this.name = name;
            this.base = base;
            this.filters = filters;
            this.grey = grey;
            this.reverse = reverse;
        }
    }
    static Color = class Color {
        constructor(name, ...colorTheme) {
            this.name = name;

            this.colors = {};
            colorTheme.forEach(double => {
                this.colors[double[0]] = double[1];
            })
        }

        setColor(double) {
            this.colors[double[0]] = double[1];
        }
    }

    static ThemeList = [];
    static ColorList = [];

    static applyTheme(theme) {
        if (typeof theme !== "string") throw new TypeError("PageTheme.applyTheme: theme precisa ser do tipo string.");
        if (findByProperty(PageTheme.ThemeList, 'name', theme) == -1) throw new ReferenceError(`"${theme}" não foi encontrado na lista de temas.`);
        PageTheme.ThemeList.forEach(theme => {
            if (HTML.classList.contains(theme.name + "Theme")) HTML.classList.remove(theme.name + "Theme");
        });
        HTML.classList.add(theme + "Theme");
    }

    static applyColor(color) {
        if (typeof color !== "string") throw new TypeError("PageTheme.applyColor: color precisa ser do tipo string.");
        if (findByProperty(PageTheme.ColorList, 'name', color) == -1) throw new ReferenceError(`"${color}" não foi encontrado na lista de cores.`);
        PageTheme.ColorList.forEach(color => {
            if (HTML.classList.contains(color.name + "Main")) HTML.classList.remove(color.name + "Main");
        })
        HTML.classList.add(color + "Main");
    }

    static #loadPromise;

    static #loadEvoked = false;

    /**
     * Carrega um arquivo JSON de temas compilado e executa uma função em seguida.
     * @param {string} themesJSONLocation 
     * @param {function} posExecute 
     */
    static loadThemes(themesJSONLocation, posExecute) {
        if (PageTheme.#loadEvoked) throw new Error("PageTheme.loadTheme: método só pode ser utilizado uma vez.");
        PageTheme.#loadEvoked = true;
        PageTheme.#loadPromise = new Promise((resolve, reject) => {
            fetch(themesJSONLocation)
                .then(response => response.json())
                .then(json => {
                    let createdColors = [];
    
                    Object.keys(json).forEach(themeName => {
                        let themeObj = json[themeName];
                        let baseObj = themeObj.base;
    
                        PageTheme.ThemeList.push(new PageTheme.Theme(
                            themeName,
                            baseObj.code,
                            baseObj.filters,
                            baseObj.grey,
                            baseObj.reverse
                        ));
    
                        Object.keys(themeObj).forEach(colorName => {
                            if (colorName == "base") return;
                            if (colorName == "grey") return;
                            if (colorName == "reverse") return;
    
                            let colorObj = themeObj[colorName];
                            
                            if (!createdColors.includes(colorName)) {
                                createdColors.push(colorName);
                                
                                PageTheme.ColorList.push(new PageTheme.Color(
                                    colorName,
                                    [themeName, colorObj]
                                ));
                            } else {
                                for (let i = 0; i < PageTheme.ColorList.length; i++) {
                                    if (PageTheme.ColorList[i].name == colorName) {
                                        PageTheme.ColorList[i].setColor([themeName, colorObj]);
                                    }
                                }
                            }
                        });
    
                        let reverseThemeObj = json[baseObj.reverse]
                        let reverseBaseObj = reverseThemeObj.base;
    
                        let baseRange = [ baseObj.code ];
                        let greyRange = [ baseObj.grey.code ];
                        let reverseRange = [ reverseBaseObj.code ];
    
                        let neutralColorVarWeights = [ 0.8, 0.75, 0.6, 0.5 ];
    
                        neutralColorVarWeights.forEach(weight => {
                            baseRange.push(colorRange( baseObj.code, reverseBaseObj.code, weight, 1 ));
                            greyRange.push(colorRange( baseObj.grey.code, reverseBaseObj.code, weight, 1 ));
                            reverseRange.push(colorRange( reverseBaseObj.code, baseObj.code, weight, 1 ));
                        });
    
                        let baseColorObj = {
                            vars: baseRange,
                            filters: baseObj.filters
                        };
    
                        let greyColorObj = {
                            vars: greyRange,
                            filters: baseObj.grey.filters
                        };
    
                        let reverseColorObj = {
                            vars: reverseRange,
                            filters: reverseBaseObj.filters
                        };
    
                        let neutralDNameObj = [
                            ['base', baseColorObj],
                            ['grey', greyColorObj],
                            ['reverse', reverseColorObj]
                        ];
    
                        neutralDNameObj.forEach(double => {
                            if (!createdColors.includes(double[0])) {
                                createdColors.push(double[0]);
    
                                PageTheme.ColorList.push(new PageTheme.Color( double[0], [themeName, double[1]] ));
                            } else {
                                for (let color of PageTheme.ColorList) {
                                    if (color.name == double[0]) {
                                        color.setColor([ themeName, double[1] ]);
                                    }
                                }
                            }
                        });
                    });

                    resolve();
                });
        });

        if (posExecute) PageTheme.#loadPromise.then(posExecute);
    }

    static posLoad(...executor) {
        executor.forEach(exec => {
            PageTheme.#loadPromise.then(exec)
        });
    }
}

function colorRange(color1, color2, weight = 1, side = 1) {
    if (typeof color1 !== "string" || color1.replace('#', '').length !== 6) return "#000000";
    if (typeof color2 !== "string" || color2.replace('#', '').length !== 6) return "#000000";
    if (typeof weight !== "number") weight = 1;
    if (side == "color1") side = 1;
    if (side == "color2") side = 2;
    if (typeof side !== "number") side = 1;

    color1 = color1.replace('#', '');
    color2 = color2.replace('#', '');

    let red1 = parseInt(color1.slice(0, 2), 16);
    let red2 = parseInt(color2.slice(0, 2), 16);
    let green1 = parseInt(color1.slice(2, 4), 16);
    let green2 = parseInt(color2.slice(2, 4), 16);
    let blue1 = parseInt(color1.slice(4, 6), 16);
    let blue2 = parseInt(color2.slice(4, 6), 16);

    let newRed, newGreen, newBlue;
    if (side == 1) {
        newRed = Math.floor((red1 * weight + red2) / (1 + weight));
        newGreen = Math.floor((green1 * weight + green2) / (1 + weight));
        newBlue = Math.floor((blue1 * weight + blue2) / (1 + weight));
    }
    if (side == 2) {
        newRed = Math.floor((red1 + red2 * weight) / (1 + weight));
        newGreen = Math.floor((green1 + green2 * weight) / (1 + weight));
        newBlue = Math.floor((blue1 + blue2 * weight) / (1 + weight));
    }

    return '#' + [newRed.toString(16), newGreen.toString(16), newBlue.toString(16)].map(sec => sec.fillUntil('0', 2, 'before')).join('').toUpperCase();
}

// Dynamic Elements

class Carousel {
    /**
     * Gera um carrossel de slides dentro de um elemento.
     * @param {HTMLElement} element
     * @param {{
     *      autoslide?: true,
     *      autoslideTime?: 8,
     *      sectionClass: string
     * }} config 
     */
    constructor(element, config = {}) {
        if (!(element instanceof HTMLElement)) throw new TypeError("Carousel constructor: element precisa ser uma instância de HTMLElement.");

        this.#element = element;

        if (typeof config !== "object") throw new TypeError("Carousel constructor: config precisa ser um objeto.");
        
        if (typeof config["autoslide"] !== "boolean" && config["autoslide"] !== undefined) throw new TypeError("Carousel constructor: config.autoslide precisa ser do tipo boolean.");
        if (typeof config["autoslideTime"] !== "number" && config["autoslideTime"] !== undefined) throw new TypeError("Carousel constructor: config.autoslideTime precisa ser do tipo number (unidade em segundos).");
        if (typeof config["sectionClass"] !== "string" && config["sectionClass"] !== undefined) throw new TypeError("Carousel constructor: config.sectionClass precisa ser do tipo string.");

        Object.keys(this.#config).forEach(key => {
            if (config[key] !== undefined) this.#config[key] = config[key];
        });
        
        element.children.forEach(child => {
            if (child.classList.contains(this.#config["sectionClass"])) {
                this.#sections.push(child);
            } else {
                child.style.display = "none";
            }
        });

        if (this.#sections.length == 0) throw new RangeError("Carousel constructor: Impossível criar elemento visual de Carousel com zero seções.");

        if (!this.#config["autoslideTime"].isBetween(0, 20)) throw new RangeError("Carousel constructor: config.autoslideTime precisa estar ser um número positivo e menor que 20 segundos.");

        this.#element.style.position = "relative";
        this.#element.style.overflow = "hidden";

        this.#sections.forEach((section, index) => {
            section.style.height = "100%";
            section.style.width = "100%";
            section.style.boxSizig = "border-box";
            section.style.position = "absolute";
            section.style.transition = "2s";
            section.style.left = `${index * 100}%`;
        });

        let carousel = this;
        if (this.#config.autoslide) {
            this.#autoSlide = setInterval(function() {
                if (carousel.#alreaySlided) return carousel.#alreaySlided = false;
                carousel.slideRight(1, false);
            }, this.#config.autoslideTime * 1000);
        }
    }

    #element;
    #sections = [];
    #current = 0;
    #config = {
        autoslide: true,
        autoslideTime: 8,
        sectionClass: "carouselSection"
    };
    #autoSlide;
    #alreaySlided = false;

    get length () {
        return this.#sections.length;
    }

    #slide(qntt, direction = "right") {
        if (typeof direction !== "string") throw new TypeError("Carousel slide: direction precisa ser do tipo string.");
        if (!direction.isIn(["right", "left"])) throw new SyntaxError("Carousel slide: direction precisa ser \"right\" ou \"left\".");

        if (direction == "right") direction = 1;
        if (direction == "left") direction = -1;

        for (let i = 0; i < qntt; i++) {
            this.#current += (1 * direction);
            if (this.#current == this.#sections.length) this.#current = 0;
            if (this.#current == -1) this.#current = this.#sections.length - 1;
        }

        this.#sections.forEach((section, index) => {
            section.style.left = `${(index - this.#current) * 100}%`;
        });
    }

    slideLeft(qntt = 1, stopAutoSlide = true) {
        this.#slide(qntt, "left");

        if (stopAutoSlide) this.#alreaySlided = true;
    }

    slideRight(qntt = 1, stopAutoSlide = true) {
        this.#slide(qntt, "right");

        if (stopAutoSlide) this.#alreaySlided = true;
    }
}

class Dropdown {
    /**
     * 
     * @param {HTMLElement} element 
     * @param {{
     *      hover: boolean,
     *      optionClass: string
     * }} config 
     */
    constructor(element, config = {}) {
        if (!(element instanceof HTMLElement)) throw new TypeError("Dropdown constructor: element precisa ser uma instância de HTMLElement.");

        this.#element = element;

        if (typeof config !== "object") throw new TypeError("Dropdown constructor: config precisa ser um objeto.");

        if (typeof config.hover !== "boolean" && typeof config.hover !== "undefined") throw new TypeError("Dropdown constructor: config.hover precisa ser do tipo boolean.");
        if (typeof config.optionClass !== "string" && typeof config.optionClass !== "undefined") throw new TypeError("Dropdown constructor: config.optionClass precisa ser do tipo string.");

        Object.keys(this.#config).forEach(key => {
            if (config[key] !== undefined) this.#config[key] = config[key];
        });
        
        this.#element.style.position = "relative";

        this.#optionsContainer.style.position = "absolute";
        this.#optionsContainer.style.height = "100%";
        this.#optionsContainer.style.width = "100%";
        this.#optionsContainer.style.overflow = "hidden";
        
        this.#shownOption.style.position = "absolute";
        this.#shownOption.style.height = "100%";
        this.#shownOption.style.width = "100%";
        this.#shownOption.style.pointerEvents = "none";

        this.#element.append(this.#optionsContainer);
        this.#element.append(this.#shownOption);

        let children = Object.assign([], this.#element.children);

        children.forEach((child, index) => {
            if (child.classList.contains(this.#config.optionClass) && child.tagName == "SPAN") {
                this.#optionsContainer.append(child);
                this.#options.push(child);

                child.style.position = "absolute";
                child.style.height = "100%";
                child.style.width = "100%";
                child.style.top = `${(index + 1) * 100}%`;
                child.style.pointerEvents = "all";

                // child.addEventListener("click", event => {
                //     console.log('evento fechar')
                //     this.#changeState({type: "closed", fixed: false});
                // });
            } else {
                if (child == this.#optionsContainer) return;
                if (child == this.#shownOption) return;
                child.style.display = "none";
            }
        });

        let emptyDIV = document.createElement('div');
        emptyDIV.style.position = "absolute";
        emptyDIV.style.height = "100%";
        emptyDIV.style.width = "100%";
        emptyDIV.style.top = `0%`;
        emptyDIV.style.pointerEvents = "all";

        this.#optionsContainer.append(emptyDIV);

        this.#optionsContainer.addEventListener("mouseenter", event => {
            if (this.#state.fixed) return;
            this.#changeState({type: "open"});
        });

        this.#optionsContainer.addEventListener("mouseleave", event => {
            if (this.#state.fixed) return;
            this.#changeState({type: "closed"});
        });

        emptyDIV.addEventListener("click", event => {
            this.fix();
            if (this.#state.fixed) {
                this.#changeState({type: "open"})
            }
        });

        this.#options.forEach(option => option.addEventListener("click", event => {
            this.#changeState({type: "closed", fixed: false});
        }));
    }

    #element;
    #optionsContainer = document.createElement('div');
    #options = [];
    #shownOption = document.createElement('div');
    #config = {
        hover: true,
        optionClass: "dropdownOption"
    };
    #state = {
        type: "closed",
        fixed: false
    };

    get element() {
        return this.#element;
    }

    get options() {
        return [...this.#options];
    }

    get config() {
        return {...this.#config};
    }

    get state() {
        return {...this.#state};
    }

    #changeState({type = this.#state.type, fixed = this.#state.fixed}) {
        if (type == undefined) type = this.#state.type;
        if (typeof type !== "string") throw new TypeError("Dropwdown changeState: state.type precisa ser do tipo string.");
        if (!type.isIn(["open", "closed"])) throw new Error("Dropwdown changeState: state.type precisa ser \"open\" ou \"closed\".");
        if (typeof fixed !== "boolean") throw new TypeError("Dropwdown changeState: state.fixed precisa ser do tipo boolean.");
        
        this.#state.fixed = fixed;
        this.#state.type = type;

        switch (type) {
            case "open":
                this.#optionsContainer.style.overflow = "visible";                
                break;
            case "closed":
                this.#optionsContainer.style.overflow = "hidden";
                break;
        }
    }

    toggleState() {
        switch (this.#state.type) {
            case "open":
                this.#changeState({type: "closed"});
                break;
            case "closed":
                this.#changeState({type: "open"});
                break;
        }
    }

    fix() {
        switch (this.#state.fixed) {
            case true:
                this.#changeState({fixed: false});
                break;
            case false:
                this.#changeState({fixed: true});
                break;
        }
    }
}

// Storage

class StorageControl {
    /**
     * @param {string} prefix 
     * @param {"local"|"session"} type 
     */
    constructor(prefix, type) {
        if (typeof prefix !== "string") throw new TypeError("StorageControl constructor: prefix precisa ser do tipo string.");
        if (!prefix.isBetween(1, 50)) throw new RangeError("StorageControl constructor: O tamanho de prefix precisa estar entre 1 e 50.");
        if (typeof type !== "string") throw new TypeError("StorageControl constructor: type precisa ser do tipo string.");
        if (!type.isIn(['local', 'session'])) throw new Error("StorageControl constructor: type precisa ser \"local\" ou \"session\".");

        this.#prefix = prefix;
        this.#type = type;

        switch (this.#type) {
            case "local":
                if (!window.localStorage) throw new ReferenceError("StorageControl constructor: window.localStorage não foi encontrado.");
                this.#storage = window.localStorage;
                break;
            case "session":
                if (!window.sessionStorage) throw new ReferenceError("StorageControl constructor: window.sessionStorage não foi encontrado.");
                this.#storage = window.sessionStorage;
                break;
        }

        let thisprototype = this.constructor.prototype;

        Object.defineProperties(this, {
            prefix: {
                enumerable: true,
                get: catchGetter(thisprototype, "prefix")
            },
            type: {
                enumerable: true,
                get: catchGetter(thisprototype, "type")
            },
            values: {
                enumerable: true,
                get: catchGetter(thisprototype, "values")
            }
        });
    }

    #prefix;
    #type;
    #storage;
    #values = {};
    #data_types = {};
    static #illegal_values = ["storage_data_types"];

    static #Data = class Data {
        /**
         * @param {string} key 
         * @param {any} value 
         * @param {"string"|"number"|"boolean"|"json"|"raw"} type 
         */
        constructor(key, value, type) {
            if (typeof key !== "string") throw new TypeError("StorageControl.Data constructor: key precisa ser do tipo string.");
            if (!key.isBetween(1, 50)) throw new RangeError("StorageControl.Data constructor: O tamanho de key precisa estar entre 1 e 50.");
            
            this.#key = key;

            this.set(value, type);

            this.#value = value;
            this.#type = type;

            if (type !== "raw") this.#rawValue = JSON.stringify(this.#value);

            let thisprototype = this.constructor.prototype;

            Object.defineProperties(this, {
                key: {
                    enumerable: true,
                    get: catchGetter(thisprototype, "key")
                },
                value: {
                    enumerable: true,
                    get: catchGetter(thisprototype, "value"),
                    set: catchSetter(thisprototype, "value")
                },
                rawValue: {
                    enumerable: true,
                    get: catchGetter(thisprototype, "rawValue")
                },
                type: {
                    enumerable: true,
                    get: catchGetter(thisprototype, "type")
                }
            });
        }

        #key;
        #value;
        #rawValue;
        #type;

        get key() {
            return this.#key;
        }

        get value() {
            return this.#value;
        }

        set value(value) {
            this.set(value);
        }

        get rawValue() {
            return this.#rawValue;
        }

        get type() {
            return this.#type;
        }

        /**
         * @param {any} value 
         * @param {"string"|"number"|"boolean"|"json"|"raw"} type 
         */
        set(value, type = this.type) {
            if (!(typeof value).isIn(['string', 'number', 'boolean', 'object'])) throw new TypeError("StorageControl.Data set: value precisa ser do tipo string, number, boolean ou object (sem referência circular).");
            if (typeof type !== "string") throw new TypeError("StorageControl.Data set: type precisa ser do tipo string.");
            if (!type.isIn(['string', 'number', 'boolean', 'json', 'raw'])) throw new Error("StorageControl.Data set: type precisa ser \"string\", \"number\", \"boolean\", \"json\" ou \"raw\"");

            let unmatchError = new TypeError("StorageControl.data set: value e type não correspondem em tipo.");

            switch (type) {
                case "boolean":
                    if (typeof value !== "boolean") throw unmatchError;
                    break;
                case "json":
                    if (typeof value !== "object") throw unmatchError;
                    break;
                case "number":
                    if (typeof value !== "number") throw unmatchError;
                    break;
                case "string":
                    if (typeof value !== "string") throw unmatchError;
                    break;
            }

            if (type !== "raw") {
                this.#rawValue = JSON.stringify(value);
                this.#value = value;
            } else {
                this.#rawValue = String(value);
                this.#value = String(value);
            }
            
            this.#type = type;
        }
    }

    get prefix() {
        return this.#prefix;
    }

    get type() {
        return this.#type;
    }

    get values() {
        return {...this.#values};
    }

    #updateDatatypes() {
        this.#storage.setItem(`${this.#prefix}:storage_data_types`, JSON.stringify(this.#data_types));
    }

    get(key) {
        if (this.#values[key]) {
            return this.#values[key].value;
        }
        return undefined;
    }

    set(key, value, type = "raw") {
        if (StorageControl.#illegal_values.includes(key)) throw new Error("StorageControl set: key foi reconhecido como um valor ilegal de StorageControl.");
        if (this.#values[key] == undefined) {
            let newRegister = new StorageControl.#Data(key, value, type);
            this.#values[key] = newRegister;
        } else {
            if (typeof key !== "string") throw new TypeError("StorageControl set: key precisa ser do tipo string.");
            if (!key.isBetween(1, 50)) throw new RangeError("StorageControl set: O tamanho de key precisa estar entre 1 e 50.");
    
            this.#values[key].set(value, type);
        }

        this.#storage.setItem(`${this.prefix}:${key}`, this.#values[key].rawValue);
        this.#data_types[key] = this.#values[key].type;
        this.#updateDatatypes();
    }

    remove(key) {
        if (typeof key !== "string") throw new TypeError("StorageControl remove: key precisa ser do tipo string.");
        if (!key.isBetween(1, 50)) throw new RangeError("StorageControl remove: O tamanho de key precisa estar entre 1 e 50.");
        if (StorageControl.#illegal_values.includes(key)) throw new Error("StorageControl remove: key foi reconhecido como um valor ilegal de StorageControl.");

        delete this.#values[key];
        delete this.#data_types[key];
        this.#storage.removeItem(`${this.#prefix}:${key}`);
        this.#updateDatatypes();
    }

    clear() {
        for (const key in this.#values) {
            this.remove(key);
        }
    }

    load() {
        /** @type {[key: string, value: any][]} */
        let loadedDoubles = [];

        for (let i = 0; i < this.#storage.length; i++) {
            const rawKey = this.#storage.key(i);
            const value = this.#storage.getItem(rawKey);
            if (rawKey.startsWith(this.#prefix + "_")) {
                const key = rawKey.slice((this.#prefix + "_").length)
                
                if (StorageControl.#illegal_values.includes(key)) {
                    // case -> operar valor especial
                    switch (key) {
                        case "storage_data_types":
                            let dataTypes = JSON.parse(value);
                            this.#data_types = dataTypes;
                            break;
                    }
                } else {
                    loadedDoubles.push( [key, value] )
                }
            }
        }

        loadedDoubles.forEach(double => {
            const key = double[0];
            let value = double[1];
            let type = this.#data_types[key];

            if (type == undefined) type = "raw";
            if (type !== "raw") {
                value = JSON.parse(value)
            } else {
                value = String(value);
            }

            this.set(key, value, type);
        })
    }
}

// Info

class Glossary {
    constructor() {
        this.request = new Glossary.Search('*', 'letter');

        let alphabet = [
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
            'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
        ];

        this.request.fetch.then(json => {
            alphabet.forEach(letter => {
                this.terms[letter] = [];
            });
            this.terms['*'] = [];

            this.allTerms = [...json].sort((a, b) => {
                a = a.term;
                b = b.term;

                if (a > b) return 1;
                if (a == b) return 0;
                if (a < b) return -1;
            });

            let openTerms = [];

            alphabet.forEach(letter => {
                let thisletterTerms = json.filter(termObj => termObj.term.toLowerCase().startsWith(letter) ? true : false)
                .sort((a, b) => {
                    a = a.term;
                    b = b.term;

                    if (a > b) return 1;
                    if (a == b) return 0;
                    if (a < b) return -1;
                });
                openTerms.push(...thisletterTerms);
                this.terms[letter].push(...thisletterTerms);
            });

            this.terms['-'] = [];

            json.forEach(term => {
                if (openTerms.includes(term)) return;
                
                this.terms['-'].push(term)
            });

            this.terms['*'].sort((a, b) => {
                a = a.term;
                b = b.term;

                if (a > b) return 1;
                if (a == b) return 0;
                if (a < b) return -1;
            });

            Object.defineProperty(this, 'length', {
                enumerable: false,
                get() {
                    return json.length;
                }
            });
        });
    }

    /** @type {Promise} */
    request;
    /** @type {{letter: terms[]}} */
    terms = {};
    /** @type {Term[]} */
    allTerms = [];

    /**
     * @param {string|HTMLElement} listElement 
     * @param {string} letter 
     * @param {function(termId): any} clickTrigger 
     */
    printList(listElement, letter = "a", clickEvent = () => {}) {
        if (typeof listElement !== "string" && !(listElement instanceof HTMLElement)) throw new TypeError("Glossary printList: listElement precisa ser do tipo string ou uma instância de HTMLElement.");
        if (typeof listElement == "string") listElement = searchElement(listElement, 'id');
        if (typeof letter !== "string") throw new TypeError("Glossary printList: letter precisa ser do tipo string.");
        letter = letter.toLowerCase().slice(0, 1);
        if (!Object.keys(this.terms).includes(letter) || letter !== "*") throw new Error("Glossary printList: letter precisa ser um caractere alfabético básico, \"-\" ou \"*\" (todos).");
        if (typeof clickEvent !== "function") throw new TypeError("Glossary printList: clickEvent precisa ser uma função.");

        listElement.innerHTML = "";

        let terms = this.terms[letter];
        if (letter == "*") terms = this.allTerms;

        terms.forEach(termObj => {
            let li = document.createElement('li');
            li.innerHTML = termObj.term;
            li.addEventListener('click', () => { clickEvent(termObj) });
            listElement.append(li);
        });
    }

    /**
     * @param {string|HTMLElement} tableElement  
     * @param {string} letter 
     * @param {function(termId): any} clickEvent 
     * @param {{
     *      event: () => void,
     *      content: string
     * }} editButton
     * @param {{
     *      event: () => void,
     *      content: string
     * }} removeButton
     */
    printTable(tableElement, letter = "a", clickEvent = () => {}, editButton = {event: undefined, content: "Editar"}, removeButton = {event: undefined, content: "Remover"}) {
        if (typeof tableElement !== "string" && !(tableElement instanceof HTMLElement)) throw new TypeError("Glossary printList: tableElement precisa ser do tipo string ou uma instância de HTMLElement.");
        if (typeof tableElement == "string") tableElement = searchElement(tableElement, 'id');
        if (typeof letter !== "string") throw new TypeError("Glossary printList: letter precisa ser do tipo string.");
        letter = letter.toLowerCase().slice(0, 1);
        if (!Object.keys(this.terms).includes(letter) && letter !== "*") throw new Error("Glossary printList: letter precisa ser um caractere alfabético básico, \"-\" ou \"*\" (todos).");
        if (typeof clickEvent !== "function") throw new TypeError("Glossary printList: clickEvent precisa ser uma função.");

        tableElement.innerHTML = "";

        let terms = this.terms[letter];
        if (letter == "*") terms = this.allTerms;

        terms.forEach(termObj => {
            let tr = document.createElement('tr');
            let td1 = document.createElement('td');
            let td2 = document.createElement('td');
            td1.innerHTML = termObj.term;
            td2.innerHTML = termObj.description;
            tr.append(td1, td2);
            if (typeof editButton == "object" && typeof editButton.event == "function") {
                let ed_b = document.createElement('button');
                ed_b.addEventListener('click', () => { editButton.event(termObj) });
                if (editButton.content == undefined) editButton.content = "Editar";
                ed_b.innerHTML = editButton.content;
                ed_b.classList.add('glossary_button');
                ed_b.classList.add('editbutton');
                let newData = document.createElement('td');
                newData.append(ed_b)
                tr.append(newData);
            }
            if (typeof removeButton == "object" && typeof removeButton.event == "function") {
                let rem_b = document.createElement('button');
                rem_b.addEventListener('click', () => { removeButton.event(termObj) });
                if (removeButton.content == undefined) removeButton.content = "Remover"
                rem_b.innerHTML = removeButton.content;
                rem_b.classList.add('glossary_button');
                rem_b.classList.add('removebutton');
                let newData = document.createElement('td');
                newData.append(rem_b)
                tr.append(newData);
            }
            tr.addEventListener('click', () => { clickEvent(termObj) });
            tableElement.append(tr);
        });
    }

    printTerm(term, termElement, descriptionElement) {}

    static Term = class Term {
        constructor(term) {
            this.request = new Glossary.Search(term, 'word');

            this.request.fetch.then(json => {
                this['id'] = json['id'];
                this['term'] = json['term'];
                this['description'] = json['description'];
            });
        }

        /** @type {Promise} */
        request;

        /**
         * @param {string|HTMLElement} term 
         * @param {string|HTMLElement} description 
         */
        print(term, description) {
            if (typeof term !== "string" && !(term instanceof HTMLElement)) throw new TypeError("Glossary.Term print: term precisa ser do tipo string ou uma instância de HTMLElement.");
            if (typeof term == "string") term = searchElement(term, 'id');
            if (typeof description !== "string" && !(description instanceof HTMLElement)) throw new TypeError("Glossary.Term print: description precisa ser do tipo string ou uma instância de HTMLElement.");
            if (typeof description == "string") description = searchElement(description, 'id');

            if (term !== null) term.innerHTML = this['term'];
            if (description !== null) description.innerHTML = this['description'];
        }
    }

    static Search = class Search {
        /**
         * @param {string} search 
         * @param {"letter"|"word"|"id"} type 
         */
        constructor(search, type) {
            if (typeof search !== "string") throw new TypeError("Glossary.Search constructor: search precisa ser do tipo string.");
            if (typeof type !== "string") throw new TypeError("Glossary.Search constructor: type precisa ser do tipo string.");
            if (!type.isIn(['letter', 'word', 'id'])) throw new Error("Glossary.Search constructor: type precisa ser \"letter\", \"word\" ou \"id\"");

            search = encodeURIComponent(search);

            /** @type {string} */
            let url_sufix = "";

            switch (type) {
                case "letter":
                    url_sufix = `letter=${search.slice(0, 1)}`;
                    break;
                case "word":
                    url_sufix = `word=${search}`;
                    break;
                case "id":
                    url_sufix = `id=${search}`;
                    break;
            }

            this.#url = `${Glossary.defaultURL}?${url_sufix}`;

            this.#fetch = new Promise((resolve, reject) => {
                fetch(this.#url)
                    .then(response => response.json())
                    .then(json => { this.#get = json; return json})
                    .then(json => resolve(json));
            });

            let thisprototype = this.constructor.prototype;

            Object.defineProperties(this, {
                fetch: {
                    enumerable: true,
                    get: catchGetter(thisprototype, 'fetch')
                },
                url: {
                    enumerable: true,
                    get: catchGetter(thisprototype, 'url')
                },
                get: {
                    enumerable: true,
                    get: catchGetter(thisprototype, 'get')
                }
            });
        }

        /** @type {string} */
        #url;
        /** @type {Promise} */
        #fetch;
        /** @type {JSON} */
        #get;

        get url() {
            return this.#url;
        }

        get fetch() {
            return this.#fetch;
        }

        get get() {
            return this.#get;
        }
    }

    static defaultURL = "./get.php";

    static setURL(url) {
        Glossary.defaultURL = url;
    }
}

// Form