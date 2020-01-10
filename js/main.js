var app = new Vue({
    el:"#app",
    data:{
        show:false,
        hamIcon:true,
        modalActive:false,
        isON:false,
        // isNavBdr:false
    },
    methods:{
        menu:function(){
            this.show = !this.show;
            this.hamIcon = !this.hamIcon;
        },
        showModal:function(){
            this.modalActive =!this.modalActive;
        },
        modalColorChange:function(){
            this.isON =! this.isON;
        },
        
    } ,
    
    created:function(){
        addEventListener('load',this.showModal)
    },
    beforeDestroy:function(){
        removeEventListener('load',this.showModal)
    }
})