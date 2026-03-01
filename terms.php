<!doctype html>
<html lang="en">

<head>
  <?php include('site_identity.php'); ?>
  <?php include('components/links.php'); ?>
  <?php include('components/meta.php'); ?>
  <title>Terms &amp; Conditions - Coral Educational Services</title>
</head>

<body>
  <div class="body_wrap">
    <?php include('components/header.php'); ?>

    <main>
      <section class="py-5 bg-light">
        <div class="container">
          <h1 class="mb-3">Terms &amp; Conditions</h1>
          <p class="text-muted mb-4">Last updated: <?php echo date('F j, Y'); ?></p>

          <p>
            The information, content, and materials provided on this website are for general informational
            purposes related to academic programs and services offered by Coral Educational Services.
            By accessing or using this website, you agree to be bound by these Terms &amp; Conditions.
          </p>

          <h5 class="mt-4">Use of Website</h5>
          <p>
            You agree to use this website only for lawful purposes and in a way that does not infringe the rights
            of, restrict, or inhibit anyone else's use and enjoyment of the website.
          </p>

          <h5 class="mt-4">Program Information</h5>
          <p>
            All details regarding programs, fees, scholarships, admission criteria, and placements are subject to
            change without prior notice. Prospective students are advised to verify latest information with the
            official admission office of Coral Educational Services.
          </p>

          <h5 class="mt-4">Intellectual Property</h5>
          <p>
            All logos, branding, text, graphics, and other content on this site are the property of Coral Educational Services
            or are used with appropriate permissions. Unauthorized use, reproduction, or
            distribution of any content is strictly prohibited.
          </p>

          <h5 class="mt-4">Limitation of Liability</h5>
          <p>
            While we strive to keep all information accurate and up to date, Coral Educational Services shall not be liable for any
            direct, indirect, incidental, or consequential damages arising out of the use of, or inability to use,
            this website or any information provided herein.
          </p>

          <h5 class="mt-4">Changes to These Terms</h5>
          <p>
            Coral Educational Services reserves the right to modify or update these Terms &amp; Conditions at any time. Continued use of the
            website after such changes constitutes your acceptance of the revised terms.
          </p>

          <div class="mt-4">
            <h5>Contact Information</h5>
            <p>For any queries related to these Terms & Conditions, please contact us:</p>
            <ul class="list-unstyled">
              <li><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($site_identity['email'] ?? ''); ?>"><?php echo htmlspecialchars($site_identity['email'] ?? ''); ?></a></li>
              <li><strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($site_identity['phone'] ?? ''); ?>"><?php echo htmlspecialchars($site_identity['phone'] ?? ''); ?></a></li>
              <li><strong>WhatsApp:</strong> <a href="<?php echo htmlspecialchars($site_identity['whatsapp'] ?? ''); ?>" target="_blank">Click to Chat</a></li>
              <li><strong>Address:</strong> <?php echo htmlspecialchars($site_identity['address'] ?? ''); ?></li>
            </ul>
          </div>
        </div>
      </section>
    </main>
  </div>

  <?php include('components/footer.php'); ?>
  <?php include('components/scripts.php'); ?>
</body>

</html>


