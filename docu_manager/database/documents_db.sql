SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `folder_id` int(30) NOT NULL,
  `file_type` varchar(3) NOT NULL,
  `file_path` text NOT NULL,
  `is_public` tinyint(1) DEFAULT 0,
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `files` (`id`, `name`, `description`, `user_id`, `folder_id`, `file_type`, `file_path`, `is_public`, `date_updated`) VALUES
(1, 'sample txt file', 'Sample file uploaded', 1, 1, 'txt', '1600320360_1600314660_sample.txt', 1, '2021-04-28 16:22:26'),
(3, 'sample', 'Sample TXT Document', 3, 9, 'txt', '1600330200_sample.txt', 0, '2021-04-128 16:25:10');

CREATE TABLE `folders` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `parent_id` int(30) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `folders` (`id`, `user_id`, `name`, `parent_id`) VALUES
(1, 1, 'Sample Folder', 0),
(3, 1, 'Sample Folder 3', 0),
(5, 1, 'Sample Folder 4', 0),
(6, 1, 'New Folder', 1),
(7, 1, 'Folder 1', 1),
(8, 1, 'test folder', 7),
(9, 3, 'My Folder 1', 0);

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1+admin , 2 = users'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `type`) VALUES
(1, 'admin', 'admin@documents.ls', 'admin123', 1),
(2, 'solly', 'solly@documents.ls', 'admin123', 1),
(3, 'sample', 'sample2documents.ls', 'user123', 2);

ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `folders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;