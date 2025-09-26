<?php
class Form {
    private $fields = [];
    private $method;
    private $action;

    public function __construct($action = "", $method = "POST") {
        $this->action = $action;
        $this->method = $method;
    }

    public function addText($name, $label) {
        $this->fields[] = "<label>$label</label><input type='text' name='$name' required>";
    }

    public function addPassword($name, $label) {
        $this->fields[] = "<label>$label</label><input type='password' name='$name' required>";
    }

    public function addRadio($name, $label, $options) {
        $html = "<label>$label</label><div class='radio-group'>";
        foreach ($options as $option) {
            $html .= "<label><input type='radio' name='$name' value='$option'> $option</label>";
        }
        $html .= "</div>";
        $this->fields[] = $html;
    }

    public function addCheckbox($name, $label, $options) {
        $html = "<label>$label</label><div class='checkbox-group'>";
        foreach ($options as $option) {
            $html .= "<label><input type='checkbox' name='{$name}[]' value='$option'> $option</label>";
        }
        $html .= "</div>";
        $this->fields[] = $html;
    }

    public function addDropdown($name, $label, $options) {
        $html = "<label>$label</label><select name='$name'>";
        foreach ($options as $option) {
            $html .= "<option value='$option'>$option</option>";
        }
        $html .= "</select>";
        $this->fields[] = $html;
    }

    public function addTextarea($name, $label) {
        $this->fields[] = "<label>$label</label><textarea name='$name' rows='4'></textarea>";
    }

    public function addFile($name, $label) {
        $this->fields[] = "<label>$label</label><input type='file' name='$name'>";
    }

    public function addSubmit($name, $value) {
        $this->fields[] = "<button type='submit' name='$name'>$value</button>";
    }

    public function display() {
        echo "<form action='{$this->action}' method='{$this->method}' enctype='multipart/form-data'>";
        foreach ($this->fields as $field) {
            echo "<div class='form-group'>$field</div>";
        }
        echo "</form>";
    }
}
?>
