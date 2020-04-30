//With Encore, think of your app.js file like a standalone JavaScript application: 
//It will require all of the dependencies it needs (e.g. jQuery or React), 
//including any CSS. Your app.js file is already doing this with a special require() function:

// require jQuery normally
const $ = require('jquery');

+ // create global $ and jQuery variables
+ global.$ = global.jQuery = $;

require('jquery-3.5.0.min.js');
require('../css/app.css');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');