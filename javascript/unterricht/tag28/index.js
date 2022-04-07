"use strict";

//####################################################
jQuery(document).ready(function () {
    // class Person {
    //     printPerson() {                                         //method
    //         let name = '';
    //         let city = '';
    //         let age = '';
    //         console.log(`Hallo ${name} aus ${city}. \nAlter: ${age}`);
    //     }
    // }

    // const person1 = new Person();                               //instanz

    // person1.printPerson();
    // person1.name = 'Merkel';
    // person1.printPerson();

    //==================================================

    // class Person {
    //     name = 'Max Mustermann';
    //     city = 'Goldberg';
    //     age = 'zeitlos';

    //     printPerson() {
    //         let name = 'ddd';
    //         let city = '';
    //         let age = '';
    //         console.log(`Hallo ${this.name} aus ${this.city}. \nAlter: ${this.age}`);                       //this. bezieht sich auf die Eigenschaften in class Person definiert
    //     }
    // }

    // const person1 = new Person();
    // person1.printPerson();

    // person1.name = 'Merkel';
    // person1.city = 'Paris';
    // person1.age = '35';
    // person1.printPerson();

    //=====================================================

        class Person {
            #name = 'Max Mustermann';
            city = 'Goldberg';
            age = 'zeitlos';

            constructor(param1, param2, param3) {
                this.#name = param1 ?? this.#name;
                this.city = param2 ?? this.city;
                this.age = param3 ?? this.age;
            }

            printPerson() {
                console.log(`Hallo ${this.#name} aus ${this.city}. \nAlter: ${this.age}`);
            }
        }

        const person1 = new Person('Merkel Angela', 'Berlin', '33');
        person1.printPerson();
        
        const person2 = new Person('Fischer Helene', 'Mallorca', '45');
        person2.printPerson();

        const person3 = new Person();
        // person3.#name = 'Thomas Mann';                                   //Private field '#name' must be declared in an enclosing class
        person3.printPerson();


});
//ende ready()