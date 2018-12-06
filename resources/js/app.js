
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});


var diapos=document.getElementsByClassName("diapos");
var buttonLft=document.getElementById("carouselLeft");
var buttonRgt=document.getElementById("carouselRight");
var num=[];
var coolDown=0;
var nextDiapo=2;

var carouselMaster = {
	init: function(){
		for(var i=0;i<diapos.length;i++)
		{
			num[i] = i;
			this.pose(diapos[i],num[i]);
		}
	},

	position: function(stl, zInd, opa, rotY, transX, transZ){
	coolDown=0;
	stl.style.zIndex = zInd;
	stl.style.opacity = opa;
	stl.style.transform = "rotateY(" + rotY + "deg) translate3d(" + transX + "px,0," + transZ + "px)";
	},

	pose: function(stl, x){
		switch (x) {

			case 0 :
			this.position(stl, -6, 0, 80, 100, -1000);
			break;

			case 1 :
			this.position(stl, -5, 0, 80, 100 , -1000);
			break;

			case 2 :
			this.position(stl, -4, 0, 80, 100 , -1000);
			break;

			case 3 :
			this.position(stl, -3, 0, 80, 100 , -1000);
			break;

			case 4 :
			this.position(stl, -2, 0, 80, 100 , -1000);
			break;

			case 5 :
			this.position(stl, -1, 0.3, 80, 100 ,-800);
			break;

			case 6 :
			this.position(stl, 0, 0.6, 80, 100 ,-600);
			break;

			case 7 : 
			this.position(stl, 1, 1, 0, 0, 0);
			break;

			case 8 :
			this.position(stl, 0, 0.6, -80, -100 ,-600);
			break;

			case 9 :
			this.position(stl, -1, 0.3, -80, -100,-800);
			break;

			case 10 :
			this.position(stl, -2, 0, -80, -100,-1000);
			break;

			case 11 :
			this.position(stl, -3, 0, -80, -100,-1000);
			break;

			case 12 :
			this.position(stl, -4, 0, -80, -100,-1000);
			break;

			case 13 :
			this.position(stl, -5, 0, -80, -100,-1000);
			break;

			case 14 :
			this.position(stl, -6, 0, -80, -100,-1000);
			break;

			default :
			this.position(stl, 1, 0, 0,0,0);
		}
	},

	coolingDown: function(){
		if(coolDown<1)
			coolDown=1;
	},

	nextDiapos: function(){
		 if(coolDown>=1)
		 {
		 	if(nextDiapo===0)
		 	{
		 		roll.min();
		 		nextDiapo=5;
		 	}
		 	else
		 		nextDiapo--;
		 }
	}
}

var roll = {

	plus: function(){
		for(var i=0;i<num.length;i++)
		{
			num[i]++;
			if(num[i]>14)
				num[i]=0;
			carouselMaster.pose(diapos[i],num[i]);
		}
	},

	min: function(){
		for(var i=0;i<num.length;i++)
		{
			num[i]--;
			if(num[i]<0)
				num[i]=14;
			carouselMaster.pose(diapos[i],num[i]);
		}
	}
}

carouselMaster.init();

document.addEventListener("keydown", function(e){
		nextDiapo=5;
		if(coolDown>=1)
		{
			if(e.keyCode==37)
	    	{
	    		roll.plus();
	    	}
	    	else if(e.keyCode==39)
	    	{
	    		roll.min();
	    	}
	    }
});

buttonLft.addEventListener("click", function(e){
	nextDiapo=5;
	if(coolDown>=1)
	{
		roll.plus();
	}
});

buttonRgt.addEventListener("click", function(e){
	nextDiapo=5;
		if(coolDown>=1)
		{
			roll.min();
		}
});

setInterval(carouselMaster.nextDiapos, 1000);
setInterval(carouselMaster.coolingDown, 250);