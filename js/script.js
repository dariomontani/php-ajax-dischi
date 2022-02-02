const App = new Vue(
  {
    el: '#app',
    data: {
      cards: []
    },
    created() {
      axios.get('http://localhost/php-ajax-dischi/server/controller-api.php').then((result) => {
        console.log(result);
        this.cards = result.data;
      }).catch((error) => { console.log(error); });
    }
  }
);