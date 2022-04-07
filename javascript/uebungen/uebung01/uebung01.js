let shoppingList  =  "     Saft, Banane, Mango, Tomaten, ****Nudeln, Birne, Eis      ";

//Aufgabe 1
console.log(shoppingList.length);                           // 63

//Aufgabe 2
console.log(shoppingList.trim());
shoppingList = shoppingList.trim();
console.log(shoppingList.length);                           // 52

//Aufgabe 3
console.log(shoppingList.indexOf("****"));                  // 30
let stars = shoppingList.indexOf("****");
console.log(stars);

//Aufgabe 4
let newList1 = shoppingList.substr(0,stars) + shoppingList.substr(stars+4,shoppingList.length);
console.log(newList1);

let newList2 = shoppingList.slice(0,stars) + shoppingList.slice(stars+4,shoppingList.length);
console.log(newList2);

//Aufgabe 5
let newList3 = shoppingList.replace("****","");
console.log(newList3);

//Aufgabe 6
console.log(newList1.toUpperCase());

//Aufgabe 7
console.log(newList1.toLowerCase());

//Aufgabe 8
let line = "-".repeat(50);
console.log(line);
console.log(newList1);
console.log(line);