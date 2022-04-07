"use strict";

//####################################################
jQuery(document).ready(function () {
    class Renderer {
        space = '';
        box = '';

        constructor(element) {
            this.space = element;
            this.setup();
        }

        setup() {
            // console.log(this);
            let box = document.createElement('div');
            box.style.position = 'absolute';
            box.style.top = '20px';
            box.style.left = '20px';
            box.style.backgroundColor = '#f1c40f';
            box.style.width = '20px';
            box.style.height = '20px';
            box.style.borderRadius = '10px';
            box.style.border = '2px solid #efefef';

            this.space.appendChild(box);
            this.box = box;
        }

        render(position) {
            this.box.style.top = position+'px';
        }
    }

    class Box {
        constructor() {
            this.position = 0;
        }
        runLoop() {
            this.position++;
        }
    }

    class Spiel {
        constructor(element) {
            this.renderer = new Renderer(element);

            this.box = new Box();
        }

        start() {
            setInterval(()=>{
                this.box.runLoop();
                this.renderer.render(this.box.position);
            }, 100);
        }
    }

    let spiel = new Spiel(document.getElementById('brett'));
    spiel.start();
});
//ende ready()