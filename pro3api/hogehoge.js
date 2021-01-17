require('date-utils');
require('date-utils');
var dt = new Date();
var formatted_hour = dt.toFormat("HH24");
var formatted_min = dt.toFormat("MI");
console.log(formatted_hour);
console.log(typeof formatted_hour);
console.log(formatted_min);
console.log(typeof formatted_min);
