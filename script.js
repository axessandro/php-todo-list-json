const {createApp} = Vue;

createApp({
    data(){
        return{
            toDoList: [],
            newToDo: "",
        }
    },
    created(){
        axios.get("server.php").then((resp)=>{
            this.toDoList = resp.data;
        })
    },
    methods:{
        addNewToDo(){
            // push newtodo on toDoList
            const data = {
                newToDo : this.newToDo
            }
            axios.post("server.php", data, {
                headers: {"Content-Type": "multipart/form-data"},
            }).then((resp)=>{
                // update toDoList
                this.toDoList = resp.data;
                // clear input
                this.newToDo = "";
            })
        },
        toggleDone(index){
            this.toDoList[index].done = !this.toDoList[index].done;
        },
        deleteToDo(index){
            this.toDoList[index].done = "del";
            axios.get("server.php").then((resp)=>{
                resp.data = this.toDoList;
            })
        }
    },
    
}).mount("#app");