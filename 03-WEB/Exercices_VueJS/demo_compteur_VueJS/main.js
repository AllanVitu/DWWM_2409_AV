const myApp = {
    data(){
        return{
            nbClics : 0
        }
    },
    methods: {
        incrementer() {
            this.nbClics++;
        },
        reinitialiser(){
            this.nbClics = 0;
        }
    }
}

Vue.createApp(myApp).mount('#app');