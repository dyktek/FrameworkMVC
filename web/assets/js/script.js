//strVar = 'czesc';
//
//intVar = 123;
//
//floVar = 1.2;
//
//arrVar = [1,2,3,4];
//
//arrVar2 = [['text'],['sdf'],['sfdg'],['texwerwert']];
//
//jsonVar = {
//    'name' : 'Krzysiek',
//    'age' : 100,
//    'desc' : 'bla bla bla'
//};
//
//arrJsonVar = [jsonVar,jsonVar,jsonVar,jsonVar];
//
//arrJsonVar2 = [
//    {'name' : 'Jurek', 'age' : 100, 'desc' : 'asd'},
//    {'name' : 'Jurek', 'age' : 100, 'desc' : 'asd'},
//    {'name' : 'Jurek', 'age' : 100, 'desc' : 'asd'},
//    {'name' : 'Jurek', 'age' : 100, 'desc' : 'asd'}
//];

//console.log(strVar);
//console.log(intVar);
//console.log(floVar);
//console.log(arrVar);
//console.log(arrVar2);
//console.log(jsonVar);
//console.log(arrJsonVar);
//console.log(arrJsonVar2);

//arrVar2.forEach (function(value, key) {
//    console.log(value[0]);
//});

//for (i = 0, len = arrVar2.length; i < len; i++) {
//    console.log(arrVar2[i][0]);
//}

//for (i in arrVar2) {
//    console.log(arrVar2[i][0]);
//}

//Array.prototype.numerNaBagiety = 997;
//
//var a = [1, 2, 3, 4, 5];
//
//console.info('for');
//for (var i = 0; i < a.length; i++) {
//    console.log(a[i]);
//}
//
//console.info('for in');
//
//for (var x in a){
//    console.log(a[x]);
//}

//function test() {
//    var someInt = 12345;
//}
//
//test();
//
//console.log(someInt);

//OBIEKT
//var User = function() {
//    this.userName = 'Stefciu';
//
//    var inst = this;
//
//    return {
//        getUserName : function() {
//            return inst.userName;
//        },
//
//
//        setUserName : function(userName) {
//            inst.userName = userName;
//        }
//    }
//
//};
//
//var someObj = new User();
//
//someObj.userName = 'dddddddddd';
//
//console.log( someObj.getUserName() );
//
//someObj.setUserName('Alex');
//
//console.log( someObj.getUserName() );

//LITERAŁ
//var User = {
//    name : '',
//    desc : '',
//
//    setName : function(name) {
//        this.name = name;
//    }
//};
//
//User.setName('sdfsdf');
//
//User.name = 'aaaaaaaaaa';
//
//console.log(User.name);

//var someString = new String("czesc");
//
//console.log(someString.toString());

//console.log( document.querySelector('#element') );


//WCZYTANIE DOKUMENTU DOM JAVA SCRIPT
//document.addEventListener("DOMContentLoaded", function(event) {

    //console.log(document.querySelector('#element'));

    //PORANIE BUTTONOW JAVA SCRIPT
    //var buttons = document.querySelectorAll('.btn');
    //
    //for (var i = 0, len = buttons.length; i < len; i++) {
    //
    //
    //    buttons[i].style = 'color:red;';
    //
    //
    //}

    //PETLA FOR NA ELEMENTACH Z KOLUMNY NAME, ZAŁOŻENIE EVENTU CLICK, JAVA SCRIPT
    //var names = document.querySelectorAll('.name');
    //for (var i = 0, len = names.length; i < len; i++) {
    //    names[i].addEventListener('click',function(){
    //        console.log(this);
    //    });
    //}


    //KOLOROWANIE KOLUMNY NAME JAVA SCRIPT
    //var color = function(obj, delay) {
    //
    //    window.setTimeout(function(){
    //        obj.style = 'color:green;font-weight:bold;font-size:22px;';
    //    }, delay);
    //
    //};
    //
    //document.querySelector('#element').addEventListener('mouseout',function(){
    //
    //    //console.log(123);
    //
    //    var names = document.querySelectorAll('.name');
    //
    //    var delay = 100;
    //
    //    for (var i = 0, len = names.length; i < len; i++) {
    //        color(names[i], delay*i);
    //    }
    //
    //});
    //

    //RESETOWANIE ANIMACJI KOLUMNY NAME JAVASCRIPT
    //document.querySelector('#element2').addEventListener('click',function(){
    //    var names = document.querySelectorAll('.name');
    //
    //    for (var i = 0, len = names.length; i < len; i++) {
    //        names[i].removeAttribute('style');
    //    }
    //});

//});


//WCZYTANIE DOKUMENTU DOM JQUERY
//$(document).ready(function(){
    //$('#element').click(function(){
    //
    //    $.get('http://mvc.pl/books',function(res){
    //
    //        console.log(res);
    //
    //        //$.each(res, function(key, value){
    //        //    console.log(value);
    //        //});
    //
    //    });
    //
    //});

    //PĘTLA JQUERY
    //$.each($('.name'), function(key, value){
    //    console.log(value);
    //});


    //KOLOROWANIE KOLUMNY NAME JQUERY
    //var color = function(obj, delay) {
    //
    //    window.setTimeout(function(){
    //        $(obj).css({
    //            color : 'green',
    //            fontWeight : 'bold',
    //            fontSize : '22px'
    //        });
    //    }, delay);
    //
    //};
    //
    //$('#element').mouseout(function(){
    //    var delay = 100;
    //
    //    var names = $('.name');
    //
    //    for (var i = 0, len = names.length; i < len; i++) {
    //        color(names[i], delay*i);
    //    }
    //});


    //ANIMOWANIE JQUERY
    //
    //$('#element').click(function(){
    //
    //    $(this).animate({
    //        //fontSize: '30px',
    //        width: "toggle",
    //    }, 500, function() {
    //        console.info('koniec animacji');
    //    });
    //
    //});

    //ANIMOWANIE JAVA SCRIPT
    //var element = document.querySelector('#element');
    //
    //element.addEventListener('click',function(){
    //
    //    var size = 100;
    //
    //    var interval = window.setInterval(function(){
    //
    //        var newWidth = parseInt(element.offsetWidth - size);
    //
    //        if(newWidth < 0) {
    //            newWidth = 0;
    //            window.clearInterval(interval);
    //        }
    //
    //        element.style.width = newWidth + 'px';
    //
    //        console.log(newWidth);
    //
    //    }, 100);
    //
    //});


//});