export const myEmployee = {
    lastname: "Doe",
    firstname: "John",
    birthday: "1981-11-12",
    salary: 2150
}



import {myEmployee} from './myEmployee';

const myApp = {
    data(){
        return{
            employe: myEmployee,
            newSalary : myEmployee.salary
        }
    },
    computed:{
        email(){
            return this.myEmployee.firstname + '.' + this.lastname + '@example.com';
        },
        methods: {
            save(){
                if(this.newSalary > this.myEmployee.salary){
                    this.myEmployee.salary =  this.newSalary
                }else{
                    alert('Le nouveau salaire doit etre supérieur au salaire actuelle')
                }
            }
        }
    }
}

Vue.createApp(myApp).mount('#app');