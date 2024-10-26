<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />

<style>
.material-symbols-outlined {
    font-variation-settings:
        'FILL'0,
        'wght'400,
        'GRAD'0,
        'opsz'24
}
.menus{
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 800px;
    margin: auto;
    padding: 2px 20px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    border : 1px solid #58151c;
    border-radius: 20px;

}
.menus a {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 2rem;
    text-decoration: none;
    
    color: #58151c;
    font-weight:  600;
    cursor: pointer;
}
.menus a:hover {
    transform: translateY(-2px);
  
    transition: all 0.5s;
}
</style>
<div class="menus">
    <a href="./">Home</a>
    <a href="#">About</a>
    <a href="gau-seva.php">Gau seva</a>
    <a href="gallary.php">Gallary</a>

</div>