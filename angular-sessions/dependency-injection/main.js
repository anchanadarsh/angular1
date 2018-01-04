// All custom codes with comment

//var number = function (a, b) {
//    this.firstnum = a;
//    this.secondnum = b;
//}
//
//function subtract() {
//    var add = new number(4, 6);
//    console.log(add);
//}
//
//subtract();



var number = function (a, b) {
    this.firstnum = a;
    this.secondnum = b;
}

function subtract(cv) {
    console.log(cv);
}
var add = new number(4, 6);

subtract(add);
