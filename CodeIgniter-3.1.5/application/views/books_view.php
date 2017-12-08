<?php
echo $this->uri->segment(1);
echo "<br>";
echo $this->uri->segment(2);
echo "<br>";
echo $this->uri->segment(3);
echo "<br>";
echo $this->table->generate($results);
echo $this->pagination->create_links();