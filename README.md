入口页:app.blade.php
注册laravel的路由,使其在前端可用

`数据库迁移和数据生成`

`foreignId() 和 foreignIdFor() 区别`
  $table->foreignId('user_id')->constrained();
   $table->foreignIdFor(User::class)->constrained();

`强制再次运行migration`
php artisan migrate:refresh  --seed

`为什么需要resource过滤数据`
blade模板,呈现的是模板;react,或者react inertia,是api数据到了浏览器再渲染页面,意味着数据完全可知

php artisan make:resource ProjectResource

`inertia`
组件中的{auth}参数哪来的?
app\Http\Middleware\HandleInertiaRequests.php
