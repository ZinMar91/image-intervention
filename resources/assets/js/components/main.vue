<article class="message" v-show="isVisible">
  <div class="message-header">
    {{title}}
    <button class="btn" @click="hideModal">x</button>
  </div>
  <div class="message-body">
    {{ body }}
  </div>
</article>

<script>
  export default {


      props: ['title', 'body'],
    data: function () {
      return {
        isVisible: true
      }
    },
    methods: {
      hideModal() {
          console.log("testing hiding my model1111111111111111111111");
          this.isVisible = false;
      }
    },
    mounted() {
      //do something after mounting vue instance
      console.log("testing 1213123123123");
    }
  }
</script>
