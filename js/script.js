/*
    ESTE ARQUIVO DEPENDE DOS PROTÓTIPOS.
*/

// IDs

class DateID {
    constructor(date = new Date) {
        if (typeof date !== "object" || date.constructor !== Date) date = new Date();

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
        if (typeof date !== "object" || date.constructor !== Date) date = new Date();

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

// Themes

class PageTheme {
    constructor(name, config) {
        if (typeof name !== "string") name = DateID.new();
        this.name = name;

        
    }

    static list = [];

    static Theme = class Theme {
        constructor(name, base, filters, grey) {
            this.name = name;
            this.base = base;
            this.filters = filters;
            this.grey = grey;
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

    static loadThemes(themesJSONLocation) {
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
                        baseObj.grey
                    ));

                    Object.keys(themeObj).forEach(colorName => {
                        if (colorName == "base") return;

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
                    })
                });
            });
    }
}