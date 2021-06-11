const app = Vue.createApp({
    data() {
        return {
            cart: 0,
            qty:0,
            selectedEvent:0,
            events: [
                { id: 101, title: 'RECONVENE 2021: The Event for Event Creators', 'description': 'Let\'s get together to discuss the future of getting together. Introducing RECONVENE, a two-day virtual summit made by and for independent event makers and doers (we call them “creators”), featuring some of the most forward-thinking entrepreneurs, artists, producers, and promoters in the event world. You’ll also hear from some of the biggest stars in health, equity, and wellness. On Day One, you\'ll get access to the latest guidelines for re-opening. On Day Two, you\'ll get your hands dirty at workshops with some of your industry heroes and peers. We hope you\'ll join us to explore where the event world is heading — or better yet, where you\'d like to take it.', image: './imgs/event01.jpg', available: true, inventory: 200, date: 'Thu, May 20, 2021, 1:00 PM CST', location: 'Online' },
                { id: 102, title: 'The Beginner\'s Guide To Investing', 'description': 'One of our most popular and highly requested workshops is back! If you either missed the first \'The Beginner\'s Guide To Investing,\' or just need a refresher, this workshop is for you! For anyone who has been wanting to learn how to invest but hesitating to dive in, this is the interactive workshop for you.', image: './imgs/event02.jpg', available: true, inventory: 200, date: 'Thu, June 3, 2021 4:30 PM – 6:30 PM CST', location: 'Online' },
                { id: 103, title: 'NFT\'s in Gaming: next level potential?', 'description': 'Find out what NFTs are, why they matter, and how you can participate. Get up to speed on the technology that’s transforming the digital economy, and hear from experts, artists, crypto enthusiasts, and more with our series of webinars. Can NFTs transform the gaming industry as we know it? Gamers are already familiar with concepts like digital unlockables, in-game currency, virtual skins and more—making video games a prime candidate for NFT-related innovations.', image: './imgs/event03.jpg', available: true, inventory: 200, date: 'Tue, May 18, 2021, 6:00 PM UTC', location: 'Online' },
            ]
        }
    },
    methods: {
        showEventDetails(index) {
            //console.log("INDEX -> " + index);
            this.selectedEvent = index;
        },
        addToCart() {
            this.cart += Number(this.qty);
        },
        removeFromCart() {

        },
        closeModal() {

        }
    }
});