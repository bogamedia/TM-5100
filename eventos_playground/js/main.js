const app = Vue.createApp({
    data() {
        return {
            cart: 0,
            qty:0,
            selectedEvent:0,
            subtotal:0,
            inventory: 0,
            available: true,
            isValidName: false,
            isValidEmail: false,
            fullname: "",
            email: "",
            events: [
                { id: 101, title: 'RECONVENE 2021: The Event for Event Creators', 'description': 'Let\'s get together to discuss the future of getting together. Introducing RECONVENE, a two-day virtual summit made by and for independent event makers and doers (we call them “creators”), featuring some of the most forward-thinking entrepreneurs, artists, producers, and promoters in the event world. You’ll also hear from some of the biggest stars in health, equity, and wellness. On Day One, you\'ll get access to the latest guidelines for re-opening. On Day Two, you\'ll get your hands dirty at workshops with some of your industry heroes and peers. We hope you\'ll join us to explore where the event world is heading — or better yet, where you\'d like to take it.', image: './imgs/event01.jpg', available: true, inventory: 200, date: 'Thu, May 20, 2021, 1:00 PM CST', location: 'Online', cost:10000 },
                { id: 102, title: 'The Beginner\'s Guide To Investing', 'description': 'One of our most popular and highly requested workshops is back! If you either missed the first \'The Beginner\'s Guide To Investing,\' or just need a refresher, this workshop is for you! For anyone who has been wanting to learn how to invest but hesitating to dive in, this is the interactive workshop for you.', image: './imgs/event02.jpg', available: true, inventory: 200, date: 'Thu, June 3, 2021 4:30 PM – 6:30 PM CST', location: 'Online', cost:20000 },
                { id: 103, title: 'NFT\'s in Gaming: next level potential?', 'description': 'Find out what NFTs are, why they matter, and how you can participate. Get up to speed on the technology that’s transforming the digital economy, and hear from experts, artists, crypto enthusiasts, and more with our series of webinars. Can NFTs transform the gaming industry as we know it? Gamers are already familiar with concepts like digital unlockables, in-game currency, virtual skins and more—making video games a prime candidate for NFT-related innovations.', image: './imgs/event03.jpg', available: true, inventory: 200, date: 'Tue, May 18, 2021, 6:00 PM UTC', location: 'Online', cost:20000 },
            ],
            tickets: [],
            clients: []
        }
    },
    methods: {
        showEventDetails(index) {
            //console.log("INDEX -> " + index);
            this.qty = 0;
            this.selectedEvent = index;
            this.inventory = this.events[this.selectedEvent].inventory;
        },
        addToCart() {
            //this.cart += Number(this.qty);
            this.subtotal = this.events[this.selectedEvent].cost * Number(this.qty);
            this.cart += this.subtotal;
            this.tickets.push({event:this.selectedEvent, qty: this.qty, subtotal: this.subtotal});
            this.events[this.selectedEvent].inventory -= this.qty;
        },
        removeFromCart(index) {
            this.cart -= this.tickets[index].subtotal;
            this.events[this.tickets[index].event].inventory += Number(this.tickets[index].qty);
            this.tickets.splice(index, 1);
        },
        closeModal() {
            
        },
        checkInventory(){
            if(this.qty > this.inventory){
                this.available = false;
            }
            else{
                this.available = true;
            }
        },
        checkName(){
            if (this.fullName.length > 3) {
                this.isValidName = true;
            } else {
                this.isValidName = false;
            }
        },
        validateEmail(email){
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
        },
        checkEmail(){
            if (this.validateEmail(this.email)) {
                this.isValidEmail = true;
            } else {
                this.isValidEmail = false;
            }
        },
        confirm(oForm){
            this.clients.push({fullName:this.fullName, email:this.email, tickets:this.tickets});
            console.log(this.clients);
            this.fullName = "";
            this.email = "";
            this.tickets=null;
            this.cart=0;
            //this.resetCart();
            //this.reset(oForm);
        },reset(oForm){
            var frm_elements = oForm.elements;
            for (let i = 0; i < frm_elements.length; i++) {
                frm_elements[i].value = "";
            }
            this.fullName = "";
            this.email = "";
        },
        resetCart(){
            for (let i = 0; i < cart; i++) {
                this.removeFromCart(i);
            }
        }
    }
});