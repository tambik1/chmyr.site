# Получение всех постов
SELECT * FROM posts;
# Получение поста по id
SELECT * FROM posts WHERE ID = 1;
# Получение всех комментариев, к посту
SELECT * FROM comments WHERE POST_ID = 3;

