var fs = require("fs");
console.log("Starting");
// fs.writeFileSync("write.txt", "Hello World! (Synchronous)");
fs.writeFile("write.txt", "Hello World! (Asynchronous)", function(error) {
	console.log("Written file");
});
console.log("Finished!");