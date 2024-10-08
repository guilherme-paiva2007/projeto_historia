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

// Themes

class PageTheme {
    constructor(name, config) {
        if (typeof name !== "string") name = DateID.new();
        this.name = name;

        
    }

    static list = [];

    static Theme = class Theme {}
    static Color = class Color {}

    static loadThemes() {}
}