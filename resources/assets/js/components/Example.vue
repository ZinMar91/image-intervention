

<template>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Example Component</div>
                <div class="panel-body">
                    <div id="name-form">
                        <label for="name">Enter name:</label>
                        <input type="text" v-model="name" id="name" name="name" value="ma ma"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</template>

<script>
    export default {
        ready() {
            console.log('Component ready.')
        }
    }
</script>
