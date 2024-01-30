const Instuments = Vue.createApp({
    data() {
      return {
        itemName: null,
        InstumentsList: [
          { name: 'depth change'}
        ]
      }
    },
    methods: {
      addItem(){
        let item = {
          name: this.itemName
        }
        this.InstumentsList.push(item)
        this.itemName = null
      }
    }
  })
  Instuments.mount('#Instuments')