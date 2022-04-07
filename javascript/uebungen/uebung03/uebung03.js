let kurs1 = ["Max","Anna","Bernd","Hans"];
let kurs2 = ["Angela","Helene","Thomas","Anke","Birgit"];

//Aufgabe1
if(kurs1.indexOf("Hans") !== -1) {                  // index -1 bedeutet der gesuchte Name ist nicht im Array
    console.log("Hans ist in Kurs 1.");
}else if(kurs2.indexOf("Hans") !== -1) {
    console.log("Hans ist in Kurs 2.");
}else{
    console.log("Hans ist in keinem Kurs.");
}

//Aufgabe2
if(kurs1.indexOf("Hans") !== -1) {
    console.log("Hans ist in Kurs 1.");
    kurs1.push("Tom");
}else if(kurs2.indexOf("Hans") !== -1) {
    console.log("Hans ist in Kurs 2.");
    kurs2.push("Tom");
}else{
    console.log("Hans ist in keinem Kurs.");
}

console.log(kurs1);
console.log(kurs2);

//Aufgabe3
if(kurs1.indexOf("Helene") !== -1) {
    console.log("Helene ist in Kurs 1. Position " + kurs1.indexOf("Helene"));
    if(kurs1.indexOf("Helene") >= 0) {
        kurs1.splice(kurs1.indexOf("Helene"),1);
        console.log("Helene wurde aus dem Kurs entfernt.");
    }
}else if(kurs2.indexOf("Helene") !== -1) {
    console.log("Helene ist in Kurs 2. Position " + kurs2.indexOf("Helene"));
    if(kurs2.indexOf("Helene") >= 0) {
        kurs2.splice(kurs2.indexOf("Helene"),1);
        console.log("Helene wurde aus dem Kurs entfernt.");
    }
}else{
    console.log("Helene ist in keinem Kurs.");
}

console.log(kurs1);
console.log(kurs2);

//Aufgabe4
kurs2.splice(0, 0, "David", "Andre");
console.log(kurs2);

//Aufgabe5
console.log(kurs1.length);
console.log(kurs2.length);
