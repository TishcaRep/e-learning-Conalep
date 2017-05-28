<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'ספריית מנהל המערכת';
$string['availablelangs'] = 'חבילות שפה זמינות';
$string['chooselanguagehead'] = 'בחירת שפה';
$string['chooselanguagesub'] = 'יש לבחור שפה עבור ההתקנה בלבד. תוכל לבחור בשפה שונה לאתר ולמשתמש באחד מהמסכים הבאים.';
$string['clialreadyconfigured'] = 'קובץ config.php כבר קיים, אנא השתמש ב
admin/cli/install_database.php
אם ברצונך להתקין את אתר זה.';
$string['clialreadyinstalled'] = 'קובץ ה-config.php קיים כבר, אנא השתמש ב- admin/cli/upgrade.php
אם ברצונך לשדרג את האתר שלך.';
$string['cliinstallheader'] = 'תוכנית התקנת Moodle {$a} בשורת הפקודה';
$string['databasehost'] = 'מסד הנתונים המארח (host)';
$string['databasename'] = 'שם מסד הנתונים';
$string['databasetypehead'] = 'בחירת התקן מסד הנתונים';
$string['dataroot'] = 'ספריית הנתונים';
$string['datarootpermission'] = 'הרשאות תיקיות bתונים (data)';
$string['dbprefix'] = 'Tables prefix';
$string['dirroot'] = 'ספריית ה-Moodle';
$string['environmenthead'] = 'בודק את הסביבה שלך...';
$string['environmentsub2'] = 'לכל התקנת Moodle יש דרישות מינימליות לגרסת ה-PHP ומספר הרחבות הכרחי של ה-PHP.
בדיקת הסביבה הושלמה לפני התקנת כל אחד ושדרוגו.אם הינך מתקשה, אנא פנה למנהל המערכת בכדי להתקין גרסת PHP חדשה או לאפשר הרחבות PHP.';
$string['errorsinenvironment'] = 'בדיקת הסביבה נכשלה!';
$string['installation'] = 'התקנה';
$string['langdownloaderror'] = 'לצערינו השפה "{$a}" לא הותקנה. תהליך ההתקנה ימשיך באנגלית.';
$string['memorylimithelp'] = '<p>
גבול הזיכרון של ה-PHP לשרת שלך כרגע מכוון ל-{$a}
</p>
<p>
דבר זה עלול לגרום בעיות זיכרון בהמשך, במיוחד אם יש לך מודולים רבים פעילים אוו הרבה משתמשים. </p>
<p> אנו ממליצים שתעצב את הגדרת ה-PHP עם ערך גבוה להגבלת הזיכרון, כמו 40M.
ישנן דרכים רבות לכך:
<ol>
<il>
אם תוכל להדר את PHP שוב עם <i> -- enable-memory-limit </i>
דבר זה יאפשר ל-Moodle להגדיר את גבול הזיכרון לבד. </i>
<i> אם יש לך גישה לקובץ ה-php.ini, תוכל לשנות את משתנה ה- <b> memory_limit </b>
שנה שם את הערך למשל ל-40M. אם אין לך גישה לקובץ זה תוכל לבקש ממנהל המערכת שלך שיעשה זאת עבורך.
</i>
<i> בכמה שרתי PHP תוכל ליצור קובץ  .htaccess בספריית  ה-Moodle שלך בצירוף שורה זו:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p> בכל אופן, בכמה שרתים דבר זה ימנע <b>מכל </b> הדפים לעבוד ( אם תראה שגיאות כאשר תיכנס לדפים) תדע כי הינך צריך להסיר את הקובץ  .htaccess.
</p>
</il>
</ol>

</p>';
$string['paths'] = 'נתיבים';
$string['pathserrcreatedataroot'] = 'ספריית המידע (Data Directory) - ({$a->dataroot}) לא יכולה להיווצר על-ידי המתקין.';
$string['pathshead'] = 'נתיבים מאושרים';
$string['pathsrodataroot'] = 'ספריית המידע (Data Directory) לא ניתנת לכתיבה.';
$string['pathsroparentdataroot'] = 'ספריית האב - ({$a->parent}) לא ניתנת לכתיבה.
ספריית המידע (Data Directory) - ({$a->dataroot}) לא יכולה להיווצר על-ידי המתקין.';
$string['pathssubdirroot'] = 'הנתיב המלא לספריית ההתקנה של Moodle';
$string['pathsunsecuredataroot'] = 'ספריית המידע (Data Directory) לא מאובטחת';
$string['pathswrongadmindir'] = 'ספריית ה-admin לא קיימת';
$string['phpextension'] = 'הרחבת PHP {$a}';
$string['phpversion'] = 'גירסת PHP';
$string['phpversionhelp'] = '<p>גרסת PHP חייבת להיות לפחות 4.3.0 או 5.1.0 (בגרסאות 5.0 קיימות מספר בעיות ידועות) </p>
<p> במערכת שלך פועלת כרגע גרסת {$a} </p>
<p> אתה חייב לשדרג את גרסת ה-PHP שלך או לעבור למחשב מארח עם עם גירסת PHP חדשה! <br/>
(במקרים של גרסת 5.0 תוכל גם לרדת בגרסה ל- 4.4)
</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'הינך רואה את עמוד זה מפני שהתקנת והפעלת בהלכה את <strong>{$a->packname} {$a->packversion}</strong>
חבילה במחשבך. ברכותינו!';
$string['welcomep30'] = 'גירסת <strong>{$a->installername}</strong> כוללת את היישומים ליצור סביבה אשר בה <strong> Moodle </strong>
יפעל דהיינו:';
$string['welcomep40'] = 'החבילה כוללת בנוסף
<strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'השימוש בכל היישומים בחבילה זו מפוקח ע"י הרשיונות המתאימים להם. החבילה
<strong>{$a->installername}</strong>
השלמה היא
<a href="http://www.opensource.org/docs/definition_plain.html">קוד פתוח</a>
והיא מופצת תחת רשיון
<a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>';
$string['welcomep60'] = 'העמודים הבאים יובילו אותך בצורה פשוטה דרך כמה צעדים לקביעת הגדרות <strong>Moodle</strong> בשרת.
ניתן לאשר הגדרות בררת־המחדל או לשנותם לפי צרכיך.';
$string['welcomep70'] = 'הקש על לחצן ה"המשך" למטה כדי להמשיך עם הגדרת ה-<strong>Moodle</strong>';
$string['wwwroot'] = 'כתובת האתר';
