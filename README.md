## HOW TO USE

- **Install** [Xampp](https://www.apachefriends.org/download.html)
- **Clone** Create new folder named 'web212' in `C:\xampp\htdocs` and clone the repository into it.
- **Start** Xampp control panel. Start the Apache and MySQL modules.
- ![image](https://user-images.githubusercontent.com/47769063/137183880-f6cbc47f-58ac-407a-855a-c44cc2a15063.png)
- **Open** [phpmyadmin](http://localhost/phpmyadmin/server_databases.php) in browser and create a new database called `web212`.
- **Go** to your cloned project directory. Import file `web212.sql` to the database.
- **User view:** visit [http://localhost/web212/](http://localhost/web212/) to open the project.
- **Admin view:** visit [http://localhost/web212/category/](http://localhost/web212/category/index) and sign in with email: 'admin@gmail.com' and password: '123456'.
<div class="article-full__nav">
                               <ul class="articles-nav-list">
                                   <li class="articles-nav-item">
                                       <a class="articles-nav-item__link"
                                           href="http://localhost/web212/news/detail/<?php echo $_["news_id"]?>">
                                           <div class="articles-nav-item__img"><img src="<?php echo $_["img_news"] ?>"
                                                   alt="article-thumb"></div>
                                           <div class="articles-nav-item__info">
                                               <div class="articles-nav-item__title"><?php echo $_["header_news"] ?>
                                               </div>
                                               <div class="articles-nav-item__user"> <i
                                                       class="fas fa-user"></i><span>By Hoàng Phiếm</span></div>
                                           </div>
                                       </a>
                                       <div class="articles-nav-item__label">Prev Post</div>
                                   </li>
                               </ul>
                           </div>
