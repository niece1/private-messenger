<template>
    <div class="navigation">
        <ul class="brand">
            <li>
                <a href="#" class="logo"><i class="far fa-comment-dots"></i></a>
            </li>
        </ul>

        <ul class="links-center">
            <li>
                <a href="#"><i class="far fa-comment-alt"></i></a>
            </li>
            <li>
                <a href="#"><i class="far fa-comment-alt"></i></a>
            </li>
            <li>
                <a href="#"><i class="fas fa-cog"></i></a>
            </li>
        </ul>

        <ul class="links-bottom">
            <li>
                <a href="#"><i class="far fa-comment-alt"></i></a>
            </li>
            <li>
                <a href="#"><i class="far fa-comment-alt"></i></a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
        
}
</script>

<style lang="scss" scoped>

.navigation {
    text-align: center;
    background: #fff;
    max-width: 8rem;
    min-width: 8rem;
    height: 100vh;
    color: #fff;
    display: flex;
    flex-direction: column;
    border-right: 1px solid #e6e6e6;
    ul.brand {
        li{
            a.logo {
                color: #0a80ff;
                font-size: 4rem;
                display: block;
            }
        }
    }
    ul.links-center {
        margin-top: auto;
        margin-bottom: auto;
        justify-content: center;
        li{
            a {
                font-size: 4rem;
                margin: 1rem 0;
            }
        }
    }
    ul.links-bottom{
        li{
            a {
                font-size: 4rem;
                margin: 1rem 0;
            }
        }
    }
}

</style>
