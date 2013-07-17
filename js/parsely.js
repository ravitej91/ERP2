/* Parsley dist/parsley.min.js build version 1.1.8-dev http://parsleyjs.org */
!function(d){var k=function(a){this.messages={defaultMessage:"This value seems to be invalid.",type:{email:"This value should be a valid email.",url:"This value should be a valid url.",urlstrict:"This value should be a valid url.",number:"This value should be a valid number.",digits:"This value should be digits.",dateIso:"This value should be a valid date (YYYY-MM-DD).",alphanum:"This value should be alphanumeric."},notnull:"This value should not be null.",notblank:"This value should not be blank.",
required:"This value is required.",regexp:"This value seems to be invalid.",min:"This value should be greater than %s.",max:"This value should be lower than %s.",range:"This value should be between %s and %s.",minlength:"This value is too short. It should have %s characters or more.",maxlength:"This value is too long. It should have %s characters or less.",rangelength:"This value length is invalid. It should be between %s and %s characters long.",mincheck:"You must select at least %s choices.",maxcheck:"You must select %s choices or less.",
rangecheck:"You must select between %s and %s choices.",equalto:"This value should be the same."};this.init(a)};k.prototype={constructor:k,validators:{notnull:function(a){return 0<a.length},notblank:function(a){return null!==a&&""!==a.replace(/^\s+/g,"").replace(/\s+$/g,"")},required:function(a){if("object"===typeof a){for(var b in a)if(this.required(a[b]))return!0;return!1}return this.notnull(a)&&this.notblank(a)},type:function(a,b){var c;switch(b){case "number":c=/^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/;
break;case "digits":c=/^\d+$/;break;case "alphanum":c=/^\w+$/;break;case "email":c=/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i;
break;case "url":a=/(https?|s?ftp|git)/i.test(a)?a:"http://"+a;case "urlstrict":c=/^(https?|s?ftp|git):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;
break;case "dateIso":c=/^(\d{4})\D?(0[1-9]|1[0-2])\D?([12]\d|0[1-9]|3[01])$/;break;default:return!1}return""!==a?c.test(a):!1},regexp:function(a,b){return RegExp(b,"i").test(a)},minlength:function(a,b){return a.length>=b},maxlength:function(a,b){return a.length<=b},rangelength:function(a,b){return this.minlength(a,b[0])&&this.maxlength(a,b[1])},min:function(a,b){return new Number(a)>=b},max:function(a,b){return new Number(a)<=b},range:function(a,b){return a>=b[0]&&a<=b[1]},equalto:function(a,b){return a===
d(b).val()},remote:function(a,b,c){var e={},f={};e[c.$element.attr("name")]=a;"undefined"!==typeof c.options.remoteDatatype&&(f={dataType:c.options.remoteDatatype});var l=function(a){c.updateConstraint("remote","isValid",a);c.manageValidationResult()};d.ajax(d.extend({},{url:b,data:e,async:c.async,method:c.options.remoteMethod||"GET",success:function(a){l("1"===a||"true"==a||"object"===typeof a&&"undefined"!==typeof a.success||/success/i.test(a))},error:function(){l(!1)}},f));c.async&&l(null);return null},
mincheck:function(a,b){return this.minlength(a,b)},maxcheck:function(a,b){return this.maxlength(a,b)},rangecheck:function(a,b){return this.rangelength(a,b)}},init:function(a){var b=a.validators;a=a.messages;for(var c in b)this.addValidator(c,b[c]);for(c in a)this.addMessage(c,a[c])},formatMesssage:function(a,b){if("object"===typeof b){for(var c in b)a=this.formatMesssage(a,b[c]);return a}return a.replace(/%s/i,b)},addValidator:function(a,b){this.validators[a]=b},addMessage:function(a,b,c){if("undefined"!==
typeof c&&!0===c)this.messages.type[a]=b;else if("type"===a)for(var d in b)this.messages.type[d]=b[d];else this.messages[a]=b}};var h=function(a,b,c){this.options=b;this.Validator=new k(b);this.init(a,c||"ParsleyField")};h.prototype={constructor:h,init:function(a,b){this.type=b;this.isValid=!0;this.element=a;this.validatedOnce=!1;this.$element=d(a);this.val=this.$element.val();this.isRequired=!1;this.constraints=[];"undefined"===typeof this.isRadioOrCheckbox&&(this.isRadioOrCheckbox=!1,this.hash=
this.generateHash(),this.errorClassHandler=this.options.errors.classHandler(a)||this.$element);this.ulErrorManagement();this.bindHtml5Constraints();this.addConstraints();this.constraints.length&&this.bindValidationEvents()},bindHtml5Constraints:function(){if(this.$element.hasClass("required")||this.$element.attr("required"))this.options.required=!0;"undefined"!==typeof this.$element.attr("type")&&RegExp(this.$element.attr("type"),"i").test("email url number range")&&(this.options.type=this.$element.attr("type"),
RegExp(this.options.type,"i").test("number range")&&(this.options.type="number","undefined"!==typeof this.$element.attr("min")&&this.$element.attr("min").length&&(this.options.min=this.$element.attr("min")),"undefined"!==typeof this.$element.attr("max")&&this.$element.attr("max").length&&(this.options.max=this.$element.attr("max"))))},addConstraints:function(){for(var a in this.options)a=a.toLowerCase(),"function"===typeof this.Validator.validators[a]&&(this.constraints.push({name:a,requirements:this.options[a],
isValid:null}),"required"===a&&(this.isRequired=!0),this.addCustomConstraintMessage(a))},addCustomConstraintMessage:function(a){var b=a+("type"===a?this.options[a].charAt(0).toUpperCase()+this.options[a].substr(1):"")+"Message";"undefined"!==typeof this.options[b]&&this.Validator.addMessage("type"===a?this.options[a]:a,this.options[b],"type"===a)},bindValidationEvents:function(){this.$element.addClass("parsley-validated");var a=this.options.trigger+(/key/i.test(this.options.trigger)?"":" keyup");
this.options.remote&&(a+=/change/i.test(a)?"":" change");if(a)this.$element.on((a+" ").split(" ").join("."+this.type+" "),!1,d.proxy(this.eventValidation,this))},generateHash:function(){return"parsley-"+(Math.random()+"").substring(2)},getHash:function(){return this.hash},getVal:function(){return this.$element.val()},eventValidation:function(a){var b=this.getVal();if("keyup"===a.type&&!/keyup/i.test(this.options.trigger)&&!this.validatedOnce||b.length<this.options.validationMinlength&&!this.validatedOnce)return!0;
this.validate(!0,!1)},isFieldValid:function(){return this.validate(!1,!1)},validate:function(a,b){var c=this.getVal(),d=null;if(this.options.listeners.onFieldValidate(this.element,this)||""===c&&!this.isRequired)return this.reset(),null;if(!this.needsValidation(c))return this.isValid;this.errorBubbling="undefined"!==typeof a?a:!0;this.async="undefined"!==typeof b?b:!0;d=this.applyValidators();this.errorBubbling&&this.manageValidationResult();return d},needsValidation:function(a){if(this.val===a&&
this.validatedOnce)return!1;this.val=a;return this.validatedOnce=!0},applyValidators:function(){var a=null,b;for(b in this.constraints){var c=this.Validator.validators[this.constraints[b].name](this.val,this.constraints[b].requirements,this);!1===c?(a=!1,this.constraints[b].isValid=a):!0===c&&(this.constraints[b].isValid=!0,a=!1!==a)}return a},updateConstraint:function(a,b,c){for(var d in this.constraints)if(this.constraints[d].name===a){this.constraints[d][b]=c;break}},manageValidationResult:function(){var a=
null,b;for(b in this.constraints)!1===this.constraints[b].isValid?(this.addError(this.constraints[b]),a=!1):!0===this.constraints[b].isValid&&(this.removeError(this.constraints[b].name),a=!1!==a);this.isValid=a;return!0===this.isValid?(this.removeErrors(),this.errorClassHandler.removeClass(this.options.errorClass).addClass(this.options.successClass),this.options.listeners.onFieldSuccess(this.element,this.constraints,this),!0):!1===this.isValid?(this.errorClassHandler.removeClass(this.options.successClass).addClass(this.options.errorClass),
this.options.listeners.onFieldError(this.element,this.constraints,this),!1):a},ulErrorManagement:function(){this.ulError="#"+this.hash;this.ulTemplate=d(this.options.errors.errorsWrapper).attr("id",this.hash).addClass("parsley-error-list")},removeError:function(a){a=this.ulError+" ."+a;this.ulError&&(d(a).remove()&&0===d(this.ulError).children().length)&&d(this.ulError).remove()},removeErrors:function(){d(this.ulError).remove()},reset:function(){this.isValid=null;this.removeErrors();this.errorClassHandler.removeClass(this.options.successClass).removeClass(this.options.errorClass);
return this},addError:function(a){d(this.ulError).length||this.options.errors.container(this.element,this.ulTemplate,this.isRadioOrCheckbox)||(!this.isRadioOrCheckbox?this.$element.after(this.ulTemplate):this.$element.parent().after(this.ulTemplate));var b=a.name,c=!1!==this.options.errorMessage?"custom-error-message":b,e=this.ulError+" ."+c,c=d(this.options.errors.errorElem).addClass(c);a=!1!==this.options.errorMessage?this.options.errorMessage:"type"===a.name?this.Validator.messages[b][a.requirements]:
"undefined"===typeof this.Validator.messages[b]?this.Validator.messages.defaultMessage:this.Validator.formatMesssage(this.Validator.messages[b],a.requirements);d(e).length||d(this.ulError).append(d(c).text(a))},addListener:function(a){for(var b in a)this.options.listeners[b]=a[b]},destroy:function(){this.$element.removeClass("parsley-validated");this.reset().$element.off("."+this.type).removeData(this.type)}};var m=function(a,b){this.initMultiple(a,b);this.inherit(a,b);this.init(a,b)};m.prototype=
{constructor:m,initMultiple:function(a,b){this.element=a;this.$element=d(a);this.hash=this.getName();this.isRadioOrCheckbox=!0;this.isRadio=this.$element.is("input[type=radio]");this.isCheckbox=this.$element.is("input[type=checkbox]");this.siblings='input[name="'+this.$element.attr("name")+'"]';this.$siblings=d(this.siblings);this.errorClassHandler=b.errors.classHandler(a)||this.$element.parent()},inherit:function(a,b){var c=new h(a,b),d;for(d in c)"undefined"===typeof this[d]&&(this[d]=c[d])},getName:function(){return"parsley-"+
this.$element.attr("name").replace(/(:|\.|\[|\])/g,"")},getVal:function(){if(this.isRadio)return d(this.siblings+":checked").val()||"";if(this.isCheckbox){var a=[];d(this.siblings+":checked").each(function(){a.push(d(this).val())});return a}}};var j=function(a,b){this.init("parsleyForm",a,b)};j.prototype={constructor:j,init:function(a,b,c){this.type=a;this.items=[];this.$element=d(b);this.options=c;var e=this;this.$element.find(c.inputs).each(function(){d(this).parsley(c);e.items.push(d(this))});
this.$element.on("submit."+this.type,!1,d.proxy(this.validate,this))},addListener:function(a){for(var b in a)if(/Field/.test(b))for(var c in this.items)this.items[c].parsley("addListener",a);else this.options[b]=a[b]},validate:function(a){var b=!0;this.focusedField=!1;for(var c in this.items)if(!1===this.items[c].parsley("validate")&&(b=!1,!this.focusedField&&"first"===this.options.focus||"last"===this.options.focus))this.focusedField=this.items[c];this.focusedField&&!b&&this.focusedField.focus();
this.options.listeners.onFormSubmit(b,a,this);return b},removeErrors:function(){for(var a in this.items)this.items[a].parsley("reset")},destroy:function(){for(var a in this.items)this.items[a].parsley("destroy");this.$element.off("."+this.type).removeData(this.type)}};d.fn.parsley=function(a,b){function c(c,f){var g=d(c).data(f);if(!g){switch(f){case "parsleyForm":g=new j(c,e);break;case "parsleyField":g=new h(c,e);break;case "parsleyFieldMultiple":g=new m(c,e);break;default:return}d(c).data(f,g)}if("string"===
typeof a&&"function"===typeof g[a])return g[a](b)}var e=d.extend(!0,{},d.fn.parsley.defaults,"undefined"!==typeof window.ParsleyConfig?ParsleyConfig:{},a,this.data()),f=null;d(this).is("form")?f=c(d(this),"parsleyForm"):d(this).is(e.inputs)&&!d(this).is(e.excluded)&&(f=c(d(this),!d(this).is("input[type=radio], input[type=checkbox]")?"parsleyField":"parsleyFieldMultiple"));return"function"===typeof b?b():f};d.fn.parsley.Constructor=j;d.fn.parsley.defaults={inputs:"input, textarea, select",excluded:"input[type=hidden]",
trigger:!1,focus:"first",validationMinlength:3,successClass:"parsley-success",errorClass:"parsley-error",errorMessage:!1,validators:{},messages:{},errors:{classHandler:function(){},container:function(){},errorsWrapper:"<ul></ul>",errorElem:"<li></li>"},listeners:{onFieldValidate:function(){return!1},onFormSubmit:function(){},onFieldError:function(){},onFieldSuccess:function(){}}};d(window).on("load",function(){d('[data-validate="parsley"]').each(function(){d(this).parsley()})})}(window.jQuery||window.Zepto);