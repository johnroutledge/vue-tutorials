<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        .color-red { color: red; }

        .color-red { color: blue; }

        .is-loading {background: red}

        .is-done {text-decoration: line-through }

    </style>
</head>
<body>
    <div id="root">

{{--        <ul>--}}

{{--            <li v-for="name in names" v-text="name"></li>--}}

{{--        </ul>--}}

{{--        <input type="text" v-model="newName">--}}

{{--        <button @click="addName">Add name</button>--}}

{{--        <button :title="title">Hover Over Me</button>--}}

{{--        <button :class="{ 'is-loading': isLoading }" @click="toggleClass">Toggle Me</button>--}}

{{--        <h1>@{{ reversedMessage }}</h1>--}}

        <h2>All Tasks</h2>

        <ul>

            <li :class="{ 'is-done': ! task.completed }" @click="toggleCompleted(task)" v-for="task in tasks" v-text="task.description"></li>

        </ul>

        <h2>Incomplete Tasks</h2>

        <ul>

            <li v-for="task in incompleteTasks" v-text="task.description"></li>

        </ul>

        <h2>Complete Tasks</h2>

        <ul>

            <li v-for="task in completeTasks" v-text="task.description"></li>

        </ul>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.4/dist/vue.js"></script>

    <script src="../js/app.js"></script>

    <script>

        new Vue({

            el: '#root',

            data: {

                tasks: [

                    {description: 'Go home', completed: true },

                    {description: 'Go up', completed: true },

                    {description: 'Go left', completed: false },

                    {description: 'Go down', completed: true },

                    {description: 'Go back', completed: true },

                    {description: 'Go green', completed: false }


                ],

                // className: 'color-red',
                //
                // title: 'Now the title is being set through JS',
                //
                // newName: '',
                //
                // names: ['John', 'Jim', 'James', 'Jo'],
                //
                // isLoading: false,
                //
                // message: 'Hello World'

                // isDone: false,

            },

            computed: {

                // reversedMessage() {
                //
                //     return this.message.split('').reverse().join('');
                //
                // },

                incompleteTasks() {

                    return this.tasks.filter(task => ! task.completed);

                },

                completeTasks() {

                    return this.tasks.filter(task => task.completed);

                }

            },


            methods: {

                // addName() {
                //
                //     this.names.push(this.newName);
                //
                //     this.newName = '';
                //
                // },
                //
                // toggleClass() {
                //
                //     this.isLoading = true;
                //
                // },

                toggleCompleted(task) {

                    task.completed = ! task.completed;

                    task.isDone = ! task.completed;

                }

            },

        })

    </script>
</body>
</html>
