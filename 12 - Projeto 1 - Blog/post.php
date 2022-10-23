<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }

    }

?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"> <?= $currentPost['description'] ?></p>
            <div class="img-container"> {
                <img src="<?= $BASE_URL?>/img/<?= $currentPost['img']; ?>" alt="<?= $currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit officiis architecto dolore suscipit cumque eligendi dignissimos? Labore, esse facilis ab dolorem officiis ipsa? Et ad voluptates error itaque officiis consequuntur?
            Tempora, fugiat alias? Ut unde tempore officiis ipsum illo aliquid eos saepe dolor. Enim quia dolorem consequatur molestiae deserunt aliquam ut! Distinctio, aliquam nam. Repellat corporis dolores voluptate ipsam dolorem.
            Cum commodi fugiat quam? Vitae quas, magni exercitationem, tenetur corrupti omnis amet recusandae libero nam reprehenderit sint neque ad iure quaerat voluptatum eum sapiente pariatur distinctio laudantium temporibus! Inventore, modi.
            In, at mollitia. Explicabo repudiandae cumque sed, aliquid neque reprehenderit fugiat necessitatibus animi dignissimos minima quos consequuntur debitis perspiciatis harum sequi ipsam possimus ipsa assumenda architecto placeat id officiis? Doloremque?
            Blanditiis doloremque molestiae voluptatem asperiores enim atque laudantium nobis quasi ad reiciendis possimus dicta repellat aliquid a ipsum, necessitatibus numquam impedit! Earum illum molestiae sunt unde in consequuntur, ad reiciendis?</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit officiis architecto dolore suscipit cumque eligendi dignissimos? Labore, esse facilis ab dolorem officiis ipsa? Et ad voluptates error itaque officiis consequuntur?
            Tempora, fugiat alias? Ut unde tempore officiis ipsum illo aliquid eos saepe dolor. Enim quia dolorem consequatur molestiae deserunt aliquam ut! Distinctio, aliquam nam. Repellat corporis dolores voluptate ipsam dolorem.
            Cum commodi fugiat quam? Vitae quas, magni exercitationem, tenetur corrupti omnis amet recusandae libero nam reprehenderit sint neque ad iure quaerat voluptatum eum sapiente pariatur distinctio laudantium temporibus! Inventore, modi.
            In, at mollitia. Explicabo repudiandae cumque sed, aliquid neque reprehenderit fugiat necessitatibus animi dignissimos minima quos consequuntur debitis perspiciatis harum sequi ipsam possimus ipsa assumenda architecto placeat id officiis? Doloremque?
            Blanditiis doloremque molestiae voluptatem asperiores enim atque laudantium nobis quasi ad reiciendis possimus dicta repellat aliquid a ipsum, necessitatibus numquam impedit! Earum illum molestiae sunt unde in consequuntur, ad reiciendis?</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href=""><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                <li><a href=""><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php")
?>