

<template>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List the Beatles</div>
                <div>
                    <ul v-for="member in beatles">
                        <li>{{ member }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</template>

<script>

var bandMembers = ['John', 'Paul', 'George', 'Ringo'];
export default {
  // props: ['beatles'],
  data() {
    return {
        beatles: ['John', 'Paul', 'George', 'Ringo']
    }
  },
    methods: {
        loadData: function() {
            this.beatles = ['bandMembers'];
        }
    },
    mounted() {
  console.log('hest111111111111111111111111111111111111111111');
        this.loadData();
        console.log('Component ready.')
    }
}

</script>
