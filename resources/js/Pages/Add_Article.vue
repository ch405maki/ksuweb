    <template>
        <div>
        <button @click="navigateToAboutPage">Go to About Page</button>
        </div>
    </template>
    
    <script>
    import { RouterLink } from 'vue-router'
    
    export default {
        methods: {
        navigateToAboutPage() {
            this.$router.push('/about')
        }
        }
    }
    </script>