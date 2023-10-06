/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/welcome.js":
/*!*********************************!*\
  !*** ./resources/js/welcome.js ***!
  \*********************************/
/***/ (() => {

eval("var navbar = document.querySelector(\".navbar\");\nvar welcome = document.querySelector(\".welcome\");\nvar navbarToggle = document.querySelector(\"#navbarSupportedContent\");\nvar resizeBakgroundImg = function resizeBakgroundImg() {\n  var height = window.innerHeight - navbar.clientHeight;\n  welcome.style.height = \"\".concat(height, \"px\");\n};\nnavbarToggle.ontransitionend = resizeBakgroundImg;\nnavbarToggle.ontransitionstart = resizeBakgroundImg;\nwindow.onresize = resizeBakgroundImg;\nwindow.onload = resizeBakgroundImg;\ndocument.querySelector('main').classList.remove('py-4');//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJuYXZiYXIiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJ3ZWxjb21lIiwibmF2YmFyVG9nZ2xlIiwicmVzaXplQmFrZ3JvdW5kSW1nIiwiaGVpZ2h0Iiwid2luZG93IiwiaW5uZXJIZWlnaHQiLCJjbGllbnRIZWlnaHQiLCJzdHlsZSIsImNvbmNhdCIsIm9udHJhbnNpdGlvbmVuZCIsIm9udHJhbnNpdGlvbnN0YXJ0Iiwib25yZXNpemUiLCJvbmxvYWQiLCJjbGFzc0xpc3QiLCJyZW1vdmUiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3dlbGNvbWUuanM/MjZkMiJdLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBuYXZiYXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLm5hdmJhclwiKTtcbmNvbnN0IHdlbGNvbWUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLndlbGNvbWVcIik7XG5jb25zdCBuYXZiYXJUb2dnbGUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI25hdmJhclN1cHBvcnRlZENvbnRlbnRcIik7XG5cbmNvbnN0IHJlc2l6ZUJha2dyb3VuZEltZyA9ICgpID0+IHtcbiAgICBjb25zdCBoZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQgLSBuYXZiYXIuY2xpZW50SGVpZ2h0O1xuICAgIHdlbGNvbWUuc3R5bGUuaGVpZ2h0ID0gYCR7aGVpZ2h0fXB4YDtcbn07XG5cblxubmF2YmFyVG9nZ2xlLm9udHJhbnNpdGlvbmVuZCA9IHJlc2l6ZUJha2dyb3VuZEltZztcbm5hdmJhclRvZ2dsZS5vbnRyYW5zaXRpb25zdGFydCA9IHJlc2l6ZUJha2dyb3VuZEltZztcbndpbmRvdy5vbnJlc2l6ZSA9IHJlc2l6ZUJha2dyb3VuZEltZztcbndpbmRvdy5vbmxvYWQgPSByZXNpemVCYWtncm91bmRJbWc7XG5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdtYWluJykuY2xhc3NMaXN0LnJlbW92ZSgncHktNCcpIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFNQSxNQUFNLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLFNBQVMsQ0FBQztBQUNoRCxJQUFNQyxPQUFPLEdBQUdGLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLFVBQVUsQ0FBQztBQUNsRCxJQUFNRSxZQUFZLEdBQUdILFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLHlCQUF5QixDQUFDO0FBRXRFLElBQU1HLGtCQUFrQixHQUFHLFNBQXJCQSxrQkFBa0JBLENBQUEsRUFBUztFQUM3QixJQUFNQyxNQUFNLEdBQUdDLE1BQU0sQ0FBQ0MsV0FBVyxHQUFHUixNQUFNLENBQUNTLFlBQVk7RUFDdkROLE9BQU8sQ0FBQ08sS0FBSyxDQUFDSixNQUFNLE1BQUFLLE1BQUEsQ0FBTUwsTUFBTSxPQUFJO0FBQ3hDLENBQUM7QUFHREYsWUFBWSxDQUFDUSxlQUFlLEdBQUdQLGtCQUFrQjtBQUNqREQsWUFBWSxDQUFDUyxpQkFBaUIsR0FBR1Isa0JBQWtCO0FBQ25ERSxNQUFNLENBQUNPLFFBQVEsR0FBR1Qsa0JBQWtCO0FBQ3BDRSxNQUFNLENBQUNRLE1BQU0sR0FBR1Ysa0JBQWtCO0FBQ2xDSixRQUFRLENBQUNDLGFBQWEsQ0FBQyxNQUFNLENBQUMsQ0FBQ2MsU0FBUyxDQUFDQyxNQUFNLENBQUMsTUFBTSxDQUFDIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3dlbGNvbWUuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/welcome.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/welcome.js"]();
/******/ 	
/******/ })()
;