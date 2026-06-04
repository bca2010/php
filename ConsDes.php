<?php
class Student {
    public $name;
    public function __construct($name) {
        $this->name = $name;
        echo "✅ Student '$this->name' created.\n";
    }
    public function __destruct() {
        echo "🗑️  Student '$this->name' destroyed.\n";
    }
}
$s1 = new Student("Alice");
$s2 = new Student("Bob");
echo "📚 Doing classwork...\n";
unset($s1);
echo "🏁 Script ends → Remaining objects destroyed below:\n";