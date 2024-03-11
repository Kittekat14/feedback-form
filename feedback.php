<?php include 'inc/header.php'; ?>
<!-- in header, there are also the database variables $conn-->
<?php
// Fetch from the MySQL database:

$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

/** Example Data */
// $feedback = [
// [
// 'id' => '1',
// 'name' => 'Beth Williams',
// 'email' => 'beth@gmail.com',
// 'body' => 'Katrin is a nice woman and explains coding in a very understandable way.'
// ],
// [
// 'id' => '2',
// 'name' => 'Walt Williams',
// 'email' => 'walt@gmail.com',
// 'body' => 'I couldn\'t understand Katrin quite well because of her bavarian accent.'
// ],
// [
// 'id' => '3',
// 'name' => 'Tiffany Walter',
// 'email' => 'walter-industry@gmail.com',
// 'body' => 'Katrin is very incompetent and she should be fired.'
// ],
// [
// 'id' => '4',
// 'name' => 'Norbert Walter',
// 'email' => 'walter-industry@gmail.com',
// 'body' => 'Katrin makes up for her inexperience with her passion for learning and her constant drive to improve her coding skills.'
// ],
// ];

?>

<?php if (empty($feedback)) : ?>
  <p class="lead mt3">There is no feedback yet.</p>
<?php endif; ?>

<h2>Past Feedback</h2>

<?php foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body'] ?>
      <div class="text-secondary mt-2">
        By <?php echo $item['name'] ?> (<?php echo $item['email'] ?>)
        <div class="text-end fw-bold"> <?php $date = strtotime($item['date']);
                                        echo date('d/M/Y h:i:s', $date) ?></div>
      </div>
    </div>

  </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>