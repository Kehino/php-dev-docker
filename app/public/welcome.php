<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ready to go!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
  </head>
  <body>
    <section class="hero is-primary">
      <div class="hero-body">
        <div class="container">
          <p class="title">Your dockerized PHP development environment is ready!</p>
          <p class="subtitle"><em>Nginx</em> + <em>PHP-FPM</em> + <em>Composer</em> + <em>MariaDB</em> + <em>phpMyAdmin</em> @ <em>Docker</em></p>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="content">
          <p>This <a href="welcome.php">default page</a> indicates the webserver is configured correctly. You can start coding in <code>./app/</code>.</p>

          <article class="message">
            <p class="message-body">Use for local development only. The database is <u>exposed</u> and <u>unprotected</u>.</p>
          </article>

          <h2>PHP informations</h2>

          <p>To check the PHP setup, go to: <a href="http://localhost/phpinfo.php" target="_blank">http://localhost/phpinfo.php</a></p>

          <p><a class="button is-link" href="http://localhost/phpinfo.php" target="_blank">Open the PHP info page</a></p>

          <h2>Database status</h2>
          <?php
try {
    $dbh = new PDO('mysql:host=db;dbname=my_database', 'root', 'root');
    echo '<article class="message is-success">
            <p class="message-body">Connected to database successfully.</p>
          </article>';
}
catch (PDOException $e) {
    echo '<article class="message is-danger">
            <p class="message-body">Fail to connect to database.</p>
          </article>';
} ?>
          <p>The default settings of the MariaDB database are:</p>
          <ul>
            <li><b>Server:</b> <code>db</code></li>
            <li><b>User:</b> <code>root</code></li>
            <li><b>Password:</b> <code>root</code></li>
          </ul>

          <h2>Database interface</h2>
          <p>You can access <em>phpMyAdmin</em>, the web interface for the MariaDB database, on this link: <a href="http://localhost:8080" target="_blank">http://localhost:8080</a></p></p>

          <p><a class="button is-link" href="http://localhost:8080" target="_blank">Open the database UI</a></p>

          <h2>PHP dependency manager</h2>
          <p>The <code>php</code> container is shipped with <em>Composer</em>, <a href="https://getcomposer.org/doc/00-intro.md">a dependency manager for PHP projects</a>, which can be used with the following command:</p>

          <div class="field has-addons">
            <div class="control is-expanded">
            <input class="input" type="text" readonly="readonly" name="command-composer" id="command-composer" value="./tools/composer.sh"/>
            </div>
            <div class="control">
              <button onclick="copyButton()" class="button is-dark">
                Copy
              </button>
            </div>
          </div>

        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          Example by <a href="https://github.com/Kehino">Kehino</a>.
          This is based off a <a href="https://medium.com/@etearner/setting-up-a-php-development-environment-with-docker-06cc7396a858">tutorial</a> from <a href="https://medium.com/@etearner">Etearner at Medium</a>.
        </p><p>
          Styled using <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>.
          The source code is licensed
          <a href="https://opensource.org/license/mit">MIT</a>.
        </p>
      </div>
    </footer>
    <script>
      function copyButton() {
        // Get the text field
        var copyText = document.getElementById("command-composer");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);
      }
    </script>
  </body>
</html>
