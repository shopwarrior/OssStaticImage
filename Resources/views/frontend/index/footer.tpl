{extends file="parent:frontend/index/footer.tpl"}

{block name="frontend_index_shopware_footer" prepend}
    <div class="container">
        <img src="{link file='frontend/_resources/img/blau.jpg'}" alt="{s name="img1"}Alt 1{/s}"/>
        <img src="{link file='frontend/_resources/img/gelb.jpg'}" alt="{s name="img1"}Alt 2{/s}"/>
        <img src="{link file='frontend/_resources/img/gruen.jpg'}" alt="{s name="img1"}Alt 3{/s}"/>
    </div>
{/block}