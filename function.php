<?php 
	
	function getPost()
	{
		global $koneksi;
		$query  = mysqli_query($koneksi,"SELECT*FROM tb_post");

		return $query;
	}

	 function getPostId($id)
	{
		global $koneksi;
		$query  = mysqli_query($koneksi,"SELECT*FROM tb_post WHERE id = '$id'");

		return $query;
	}

	function getLastPost()
	{
		global $koneksi;
		$select = mysqli_query($koneksi,"SELECT*FROM tb_post");
		$row = mysqli_num_rows($select);
		$content = $row - 2;

		$s = "SELECT*FROM tb_post LIMIT $content,$row";
		$query = mysqli_query($koneksi,$s);
		return $query;
	}

	function newPost()
	{
		global $koneksi;
		$select = mysqli_query($koneksi,"SELECT max(id) AS id FROM tb_post");
		$ftc = mysqli_fetch_array($select);
		$max = $ftc['id'];

		$s = "SELECT*FROM tb_post WHERE id='$max'";

		$query = mysqli_query($koneksi,$s);
		return $query;
	}

	function getNews(){
		global $koneksi;
		$query  = mysqli_query($koneksi,"SELECT*FROM tb_news");

		return $query;
	}
	function getGallery()
	{
		global $koneksi;
		$query  = mysqli_query($koneksi,"SELECT*FROM tb_gallery");

		return $query;
	}
 ?>