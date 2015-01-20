var fs = require("fs");
console.log("Starting");
// fs.readFile("sample.txt", function(error,data) {
//     console.log("Contents: " + data);
// });
var content = fs.readFileSync("sample.txt");
console.log("Contents: " + content);
console.log("Carry on executing");