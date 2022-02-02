const App = new Vue(
  {
    el: '#app',
    data: {
    },
    created() {
      axios.get('http://localhost:8888/Boolean/PHP/php-ajax-dischi/server/controller-api.php').then((result) => {
        console.log(result);
      }).catch((err) => {
        console.log(err);
      });
    },
  }
);