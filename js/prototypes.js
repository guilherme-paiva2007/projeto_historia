class PrototypeManipulator {
    constructor(targetObject) {
        this.proto = targetObject.prototype;

        if (typeof targetObject !== "function") this.proto = class { }

        PrototypeManipulator.manipulators.push(this);
    }

    methods = [];
    properties = [];

    setMethod(name, config) {
        let baseConfig = { writable: false, enumerable: false, configurable: true };

        if (typeof config.value !== "function") return;
        if (typeof this.proto[name] !== "undefined") return;

        Object.keys(baseConfig).forEach(conf => {
            if (config[conf] == undefined) config[conf] = baseConfig[conf];
        });

        Object.defineProperty(this.proto, name, config);

        if (!this.methods.includes(name)) {
            this.methods.push(name);
        }
    }
    setProperty(name, config) {
        let baseConfig = { value: undefined, configurable: true };

        if (typeof this.proto[name] !== "undefined") return;

        Object.keys(baseConfig).forEach(conf => {
            if (config[conf] == undefined) config[conf] = baseConfig[conf];
        });

        Object.defineProperty(this.proto, name, config);

        if (!this.properties.includes(name)) {
            this.properties.push(name);
        }
    }

    unsetMethod(name) {
        if (this.methods.includes(name)) {
            delete this.proto[name];

            let newList = [];
            this.methods.forEach(method => {
                if (method == name) return;
                newList.push(method);
            });
            this.methods = newList;
        }
    }

    unsetAllMethods() {
        this.methods.forEach(method => {
            this.unsetMethod(method);
        });
    }

    unsetProperty(name) {
        if (this.properties.includes(name)) {
            delete this.proto[name];

            let newList = [];
            this.properties.forEach(property => {
                if (property == name) return;
                newList.push(property);
            });
            this.properties = newList;
        }
    }

    unsetAllProperties() {
        this.properties.forEach(property => {
            this.unsetProperty(property);
        });
    }

    static manipulators = [];

    static unsetManipulators() {
        PrototypeManipulator.manipulators.forEach(manipulator => {
            manipulator.unsetAllMethods();
            manipulator.unsetAllProperties();
        })
    }
}

function setPrototypes() {
    const StringManipulator = new PrototypeManipulator(String);
    const NumberManipulator = new PrototypeManipulator(Number);
    const ArrayManipulator = new PrototypeManipulator(Array);

    StringManipulator.setMethod('removeText', {
        /**
         * Remove um trecho de texto e retorna o novo.
         * @param {string} text Trecho a ser removido
         * @returns {string}
         */
        value: function removeText(text) {
            return this.split(text).join('');
        }
    });

    StringManipulator.setMethod('isIn', {
        /**
         * Diz se esta string é elemento de uma lista.
         * @param {string[]} list Lista de valores a ser verificada
         * @returns {boolean}
         */
        value: function isIn(list) {
            let isIn = false;
            list.forEach(element => {
                if (this == element) isIn = true;
            })
            return isIn;
        }
    });

    StringManipulator.setMethod('reverse', {
        /**
         * Retorna o valor invertido de uma string.
         * @returns {string}
         */
        value: function reverse() {
            return this.split('').reverse().join('')
        }
    });

    StringManipulator.setMethod('isBetween', {
        /**
         * Verifica se o tamanho de uma `string` está entre dois valores.
         * @param {Number} min Valor mínimo a ser verificado.
         * @param {Number} max Valor máximo a ser verificado. Se não for definido, será `Infinity`.
         * @returns {boolean}
         */
        value: function isBetween(min, max = Infinity) { // Atualizar para igual isBetween de números.
            if (max == undefined) max = Infinity;
            if (min > max) [max, min] = [min, max];

            let is = true;

            if (this.length < min) is = false;
            if (this.length > max) is = false;

            return is;
        }
    });

    StringManipulator.setMethod('fillUntil', {
        /**
         * Preenche uma `string` até alcançar o tamanho desejado.
         * @param {char} filler Caractere para preencher
         * @param {number} lengthNeeded Tamanho desejado
         * @param {"before"|"after"} pos Posição a ser preenchida
         * @returns {string}
         */
        value: function fillUntil(filler, lengthNeeded, pos = "after") {
            if (typeof lengthNeeded !== "number") lengthNeeded = 0;
            if (typeof pos !== "string") pos = "after";
            if (pos !== "after" && pos !== "before") pos = "after"
            if (filler.length > 1) filler = filler[0];

            let array = this.split('');
            for (let i = 0; i < this.length; i++) {
                array[i] = this[i];
            }

            while (array.length < lengthNeeded) {
                if (pos == "after") {
                    array.push(filler)
                }
                if (pos == "before") {
                    array.unshift(filler)
                }
            }
            return array.join('')
        }
    });

    StringManipulator.setMethod('isEmpty', {
        /**
         * Verifica se uma string está vazia.
         * @param {string} ignore Valor a ser ignorado, geralmente espaços.
         * @returns {boolean}
         */
        value: function isEmpty(ignore = "") {
            if (this.split(ignore).join('').length == 0) {
                return true;
            } else {
                return false;
            }
        }
    });



    NumberManipulator.setMethod('toHexadecimal', {
        /**
         * Transforma um número em hexadecimal.
         * @returns {string}
         */
        value: function toHexadecimal() {
            let number = Math.floor(this);
            return number.toString(16);
        }
    });

    NumberManipulator.setMethod('isBetween', {
        /**
         * Verifica se um número está entre dois outros.
         * @param {number} min Valor mínimo da verificação
         * @param {number} max Valor máximo da verificação
         * @param {boolean} includeEquals Inclue valores iguais ao mínimo ou máximo como verdadeiros
         * @param {boolean} complexReturn Muda o retorno para um objeto com detalhes da comparação
         * @returns {boolean|object}
         */
        value: function isBetween(min, max, includeEquals, complexReturn) {
            if (min > max) [min, max] = [max, min];

            let isBetween = true;
            let rel = "between"
            let isEqualTo = null;
            if (includeEquals) {
                if (this > max) { isBetween = false; rel = "bigger" };
                if (this < min) { isBetween = false; rel = "smaller" };
                if (this == max) { isEqualTo = "max" }
                if (this == min) { isEqualTo = "min" }
            } else {
                if (this >= max) { isBetween = false; rel = "bigger" };
                if (this <= min) { isBetween = false; rel = "smaller" };
                if (this == max) { isEqualTo = "max" }
                if (this == min) { isEqualTo = "min" }
            }

            if (complexReturn) {
                let newObject = {}
                newObject.is = isBetween;
                newObject.rel = rel;
                newObject.includeEquals = includeEquals;
                newObject.isEqualTo = isEqualTo;
                newObject.originalValue = this + 0;
                isBetween = newObject;
            }

            return isBetween;
        }
    });

    NumberManipulator.setMethod('formatInMoneyBR', {
        /**
         * Converte um número em dinheiro brasileiro.
         * @param {boolean} useBeforePlacer Verdadeiro para caso queira inserir R$ no começo
         * @returns {string}
         */
        value: function formatInMoneyBR(useBeforePlacer = true) {
            let moneyArray = this.toString().split('.');
            let integer = moneyArray[0];
            let decimal = moneyArray[1];

            if (decimal == undefined) decimal = "0";
            while (decimal.length < 2) {
                decimal = decimal += '0';
            }

            let integerChars = integer.split('').reverse();
            integer = "";
            for (let i = 0; i < integerChars.length; i++) {
                integer += integerChars[i];
                if ((i + 1) % 3 == 0) integer += '.';
            }
            integer = integer.split('').reverse().join('');
            if (integer.startsWith(".")) integer = integer.slice(1);

            let beforePlacer = "";
            if (useBeforePlacer) beforePlacer = "R$";

            return beforePlacer + integer + "," + decimal;
        }
    });



    ArrayManipulator.setMethod('fillUntil', {
        /**
         * Preenche um array até que ele esteja completamente cheio e retorna o novo array.
         * @param {any} filler Valor para ser inserido ao preencher
         * @param {number} lengthNeeded Tamanho desejado
         * @param {"before"|"after"} pos Posição a ser inserida
         * @returns {array}
         */
        value: function fillUntil(filler, lengthNeeded, pos) {
            if (typeof lengthNeeded !== "number") lengthNeeded = 0;
            if (typeof pos !== "string") return;
            if (pos !== "after" && pos !== "before") pos = "after"

            let array = [];
            for (let i = 0; i < this.length; i++) {
                array[i] = this[i];

            }

            while (array.length < lengthNeeded) {
                if (pos == "after") {
                    array.push(filler)
                }
                if (pos == "before") {
                    array.unshift(filler)
                }
            }
            return array
        }
    });

    ArrayManipulator.setMethod('remove', {
        /**
         * Retorna um novo array sem os índices selecionados.
         * @param {number[]} searchIndex 
         * @returns {array}
         */
        value: function remove(...searchIndex) {
            let newArray = [];
            for (let index in this) {
                if (!searchIndex.includes(parseInt(index))) newArray.push(this[index]);
            }
            return newArray;
        }
    });



    if (typeof HTMLCollection !== undefined) {
        const HTMLCollectionManipulator = new PrototypeManipulator(HTMLCollection);
        const HTMLElementManipulator = new PrototypeManipulator(HTMLElement);

        HTMLCollectionManipulator.setMethod('forEach', {
            /**
             * Similar à `Array.forEach`, porém aplicado em HTMLCollection.
             * @param {Function} callback Passa pelos elementos dessa lista, executando tendo os parâmetros de: `element`, `index`, `collection`.
             */
            value: function forEach(callback) {
                let collection = this;
                for (let index = 0; index < this.length; index++) {
                    const element = collection[index];
                    callback(element, index, collection);
                }
            }
        });

        HTMLCollectionManipulator.setMethod('addEventListener', {
            /**
             * Adiciona um eventListener a todos os elementos da coleção.
             * @param {Event.type} event Evento a ser acionado
             * @param {(event: event) => void} method Callback de evento
             */
            value: function addEventListener(event, method) {
                let collection = this;
                for (let index = 0; index < this.length; index++) {
                    const element = collection[index];
                    element.addEventListener(event, method);
                }
            }
        });

        HTMLElementManipulator.setMethod('write', {
            /**
             * Reescreve o valor de `innerHTML` de um elemento.
             * @param {string} content Conteúdo a ser escrito
             * @param {"before"|"after"|"overwrite"} type Posição da escrita
             */
            value: function write(content, type) {
                switch (type) {
                    case "before":
                        this.innerHTML = content + this.innerHTML
                        break;
                    case "after":
                        this.innerHTML += content
                        break;
                    default:
                    case "overwrite":
                        this.innerHTML = content
                        break;
                }
            }
        });

        HTMLElementManipulator.setMethod('processValue', {
            /**
             * Executa uma função baseada no valor atual do input
             * @param {Function(value, otherArgs)} executeFunction Função a ser executada e processar o valor
             * @param {Array} otherArgs Outros argumentos da função
             */
            value: function processValue(executeFunction, ...otherArgs) {
                if (this.value == undefined) this.value = "";

                executeFunction(this.value, ...otherArgs);
            }
        });
    }
}

setPrototypes();