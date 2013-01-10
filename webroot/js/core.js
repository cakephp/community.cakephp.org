/**
 * App application wide Javascript namespace
 * 
 */
var App = {};

App.init = function (){
	for (var prop in this) {
		if (typeof this[prop].init == 'function') {
			App.initModule(prop);
		}
	}
};
App.initModule = function (module) {
	if (this[module].require != undefined) {
		var classes = this[module].require.slice();
		classes.push(this[module].init.bind(this[module]));
		App.use.apply(window, classes);
	} else {
		this[module].init();
	}
};


/**
 * Create a basic prototypal inheritance Class.
 * 
 * Create new classes with Class.create({prototype object});
 * Extend a class with Class.extend({prototype object});
 * Tape on new methods to all existing instances with Class.implement({object});
 * 
 * Classes can have an init() function which acts as a constructor for the prototype
 */
function Class (features) {
	var klass = function (noStart) {
		if (typeof this.init == 'function' && noStart != 'noInit') {
			return this.init.apply(this, arguments);
		}
		return this;
	};
	for (var key in this) {
		klass[key] = this[key];
	}
	klass.prototype = features;
	return klass;
};

Class.prototype.extend = function (features) {
	var oldProto, oldFunc, newFunc, func;
	oldProto = new this('noInit');

	var makeParent = function(parent, current) {
		return function () {
			this.parent = parent;
			return current.apply(this, arguments);
		};
	};

	for (var key in features) {
		oldFunc = oldProto[key];
		newFunc = features[key];
		if (typeof oldFunc != 'function' || typeof newFunc != 'function') {
			func = newFunc;
		} else {
			func = makeParent(oldFunc, newFunc);
		}
		oldProto[key] = func;
	}
	return new Class(oldProto);
};

Class.prototype.implement = function (features) {
	for (var key in features) {
		this.prototype[key] = features[key];
	}
};

/**
 * Empty function good for comparing to empty functions
 */
Class.empty = function () { };



/**
 * Add bind function to all functions.
 *
 * lets change 'this' in any function.
 */
if (typeof Function.bind != 'function') {
	Function.prototype.bind = function (obj) {
		var method = this;
		return function() {
			return method.apply(obj, arguments);
		};
	}
}

// Convert CamelCase string to camel_case string.
if (typeof String.underscore != 'function') {
	String.prototype.underscore = function () {
		var underscored = this.replace(/([A-Z])/g, '_$1').toLowerCase();
		if (underscored.substr(0, 1) == '_') {
			return underscored.substring(1);
		}
		return underscored;
	}
}


if (console === undefined) {
	var console = {
		log: function () {},
		error: function () {},
		trace: function () {}
	};
}