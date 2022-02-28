<form class="recherche" action="<?php echo get_home_url('/') ?>">
    <input type="text" class="recherche__input" name="s" value="<?php echo get_search_query() ?>">
    <button class="recherche__bouton">
        <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
    </button>
</form>