<?php
function sinusAngle($angle, $unite = "radian") {
    switch (strtolower($unite)) {
        case "degré":
            return sin(deg2rad($angle));
        case "grade":
            return sin(deg2grad($angle));
        default:
            return sin($angle);
    }
}

$angle_en_degre = 45;
$angle_en_grade = 50;

echo "Sinus en radians: " . sinusAngle($angle_en_degre) . "\n";
echo "Sinus en degrés: " . sinusAngle($angle_en_degre, "degré") . "\n";
echo "Sinus en grades: " . sinusAngle($angle_en_grade, "grade");
?>