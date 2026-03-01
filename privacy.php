<!doctype html>
<html lang="en">

<head>
  <?php include('site_identity.php'); ?>
  <?php include('components/links.php'); ?>
  <?php include('components/meta.php'); ?>
  <title>Privacy Policy - Coral Educational Services</title>
</head>

<body>
  <div class="body_wrap">
    <?php include('components/header.php'); ?>

    <main>
      <section class="py-5 bg-light">
        <div class="container">
          <h1 class="mb-3">Privacy Policy</h1>
          <p class="text-muted mb-4">Last updated: <?php echo date('F j, Y'); ?></p>

          <p>
            Coral Educational Services is committed to protecting your privacy. This Privacy Policy explains how we
            collect, use, and safeguard personal information you provide through this website and our enquiry
            forms.
          </p>

          <h5 class="mt-4">Information We Collect</h5>
          <p>
            We may collect information such as your name, email address, phone number, city, academic interests, and
            other details that you voluntarily submit through enquiry or application forms.
          </p>

          <h5 class="mt-4">How We Use Your Information</h5>
          <p>
            The information you provide is used solely for:
          </p>
          <ul>
            <li>Responding to your enquiries and providing admission-related guidance</li>
            <li>Sharing information about our programs, events, and admission process</li>
            <li>Internal analytics and improving our academic and admission services</li>
          </ul>

          <h5 class="mt-4">Data Sharing</h5>
          <p>
            We do not sell or rent your personal information. Your data may be shared only with authorized staff,
            admission partners, or service providers who assist us in admission support and communication, and only
            to the extent necessary for these purposes.
          </p>

          <h5 class="mt-4">Data Security</h5>
          <p>
            We take reasonable technical and organizational measures to protect your personal information from
            unauthorized access, alteration, disclosure, or destruction.
          </p>

          <h5 class="mt-4">Third-Party Links &amp; Services</h5>
          <p>
            This website may contain links to third-party websites or services (such as WhatsApp, social media, or
            payment gateways). Coral Educational Services is not responsible for privacy practices or content of these external sites.
          </p>

          <h5 class="mt-4">Your Rights</h5>
          <p>
            You may contact us to update, correct, or request deletion of your personal information that we hold,
            subject to applicable laws and institutional policies.
          </p>

          <div class="mt-4">
            <h5>Contact Information</h5>
            <p>For any questions regarding this Privacy Policy or how your data is handled, please contact us:</p>
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


