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
        if (!(date instanceof Date)) throw new Error('Parâmetro precisa ser uma instância de `Date`.');

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
    if (typeof target !== "string") throw new TypeError('target precisa ser do tipo string.');
    if (target.isEmpty(' ')) throw new SyntaxError('target precisa conter um valor válido.');
    if (typeof type !== "string") throw new TypeError('type precisa ser do tipo string.');
    if (!type.isIn(['id', 'class', 'tag', 'query', 'queryAll'])) throw new SyntaxError('type precisa ser "id", "class", "tag", "query" ou "queryAll"');

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

        if (typeof this.#config.theme !== "string") throw new TypeError('config.theme precisa ser do tipo string.');
        if (this.#config.theme.isEmpty(' ')) throw new SyntaxError('config.theme precisa conter um valor válido.');
        if (typeof this.#config.color !== "string") throw new TypeError('config.color precisa ser do tipo string.');
        if (this.#config.color.isEmpty(' ')) throw new SyntaxError('config.color precisa conter um valor válido.');

        if (findByProperty(PageTheme.ThemeList, 'name', this.theme) == -1) throw new ReferenceError(`"${this.theme}" não foi encontrado na lista de temas.`);
        if (findByProperty(PageTheme.ColorList, 'name', this.color) == -1) throw new ReferenceError(`"${this.color}" não foi encontrado na lista de temas.`);
    }

    #config = {};

    get theme() {
        return this.#config.theme;
    }

    get color() {
        return this.#config.color;
    }

    set theme(newTheme) {
        if (typeof newTheme !== "string") throw new TypeError('newTheme precisa ser do tipo string.');
        if (newTheme.isEmpty(' ')) throw new SyntaxError('newTheme precisa conter um valor válido.');
        if (findByProperty(PageTheme.ThemeList, 'name', newTheme) == -1) throw new ReferenceError(`"${newTheme}" não foi encontrado na lista de temas.`);
        this.#config.theme = newTheme;
    }

    set color(newColor) {
        if (typeof newColor !== "string") throw new TypeError('newColor precisa ser do tipo string.');
        if (newColor.isEmpty(' ')) throw new SyntaxError('newColor precisa conter um valor válido.');
        if (findByProperty(PageTheme.ColorList, 'name', newColor) == -1) throw new ReferenceError(`"${newColor}" não foi encontrado na lista de temas.`);
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
        if (typeof theme !== "string") throw new TypeError("theme precisa ser do tipo string.");
        if (findByProperty(PageTheme.ThemeList, 'name', theme) == -1) throw new ReferenceError(`"${theme}" não foi encontrado na lista de temas.`);
        PageTheme.ThemeList.forEach(theme => {
            if (HTML.classList.contains(theme.name + "Theme")) HTML.classList.remove(theme.name + "Theme");
        });
        HTML.classList.add(theme + "Theme");
    }

    static applyColor(color) {
        if (typeof color !== "string") throw new TypeError("color precisa ser do tipo string.");
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
        if (PageTheme.#loadEvoked) throw new Error("PageTheme.loadTheme só pode ser utilizado uma vez.");
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
        if (!(element instanceof HTMLElement)) throw new TypeError("element precisa ser uma instância de HTMLElement.");

        this.#element = element;

        if (typeof config !== "object") throw new TypeError("config precisa ser um objeto.");
        
        if (typeof config["autoslide"] !== "boolean" && config["autoslide"] !== undefined) throw new TypeError("a");
        if (typeof config["autoslideTime"] !== "number" && config["autoslideTime"] !== undefined) throw new TypeError("b1");
        if (typeof config["sectionClass"] !== "string" && config["sectionClass"] !== undefined) throw new TypeError("c");

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

        if (this.#sections.length == 0) throw new RangeError("Impossível criar elemento visual de Carousel com zero seções.");

        if (!this.#config["autoslideTime"].isBetween(0, 20)) throw new RangeError("config.autoslideTime precisa estar ser um número positivo e menor que 20 segundos.");

        this.#element.style.position = "relative";
        this.#element.style.overflow = "hidden";

        this.#sections.forEach((section, index) => {
            section.style.height = "100%";
            section.style.width = "100%";
            section.style.boxSizig = "border-box";
            section.style.position = "absolute";
            section.style.transition = "2s";
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
        if (typeof direction !== "string") throw new TypeError("direction precisa ser do tipo string.");
        if (!direction.isIn(["right", "left"])) throw new SyntaxError("direction precisa ser \"right\" ou \"left\".");

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

    slideLeft(qntt = 1) {
        this.#slide(qntt, "left");
    }

    slideRight(qntt = 1) {   
        this.#slide(qntt, "right");
    }
}

class Sidebar {
    constructor() {}
}

// Infos

