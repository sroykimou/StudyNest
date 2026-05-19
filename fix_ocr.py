import os
import re

replacements = [
    ("េសពé", "ស្ពៀរ"),
    ("េសéព", "ស្ពៀរ"),
    ("ចរនT", "ចរន្ត"),
    ("ចរនអT", "ចរន្ត"),
    ("ចរនà", "ចរន្ត"),
    # ("ចរន", "ចរន្ត"), # Rule 6: (in context of current) - will handle carefully
    ("@តង់", "ត្រង់"),
    ("@បែវង", "ប្រវែង"),
    ("@សប", "ស្រប"),
    ("@បតB ុង", "ប្រូតុង"),
    ("េអឡចិ @តង£", "អេឡិចត្រុង"),
    ("សូេលណូអតុី", "សូឡេណូអ៊ីត"),
    ("សូេលណូអត", "សូឡេណូអ៊ីត"),
    ("េសãគsីវង់", "សៀគ្វីវង់"),
    ("េសãគវsីង", "សៀគ្វីវង់"),
    ("បបូ ន៊ី", "បូប៊ីន"),
    ("បបូ ៊ីន", "បូប៊ីន"),
    ("ផចិត", "ផ្ចិត"),
    ("ផតចិ", "ផ្ចិត"),
    # ("កំ", "កាំ"), # Rule 20: (as a word meaning radius) - will handle carefully
    ("ចមងយ", "ចម្ងាយ"),
    ("0ងំ តងស់ ុីេត", "អាំងតង់ស៊ីតេ"),
    ("0ំងតង់សុីេត", "អាំងតង់ស៊ីតេ"),
    ("0ងំ ឌុ ចសយងុ", "អាំងឌុចស្យុង"),
    ("0ំងឌុចស្យុង", "អាំងឌុចស្យុង"),
    ("ឌីេអឡិ ច@ទិច", "ឌីអេឡិចត្រិច"),
    ("មជឈYÅន", "មជ្ឈដ្ឋាន"),
    ("កម`ងំ", "កម្លាំង"),
    ("ម៉េញទិច", "ម៉ាញេទិច"),
    ("ម៉ញទិច", "ម៉ាញេទិច"),
    ("ជ@មបម៉េញទិច", "ជម្រាបម៉ាញេទិច"),
    ("ជ@មបម៉ាញេទិច", "ជម្រាបម៉ាញេទិច"),
    ("េតសា](", "តេស្លា"),
    ("េត6`ែម@៉ត", "តេស្លាម៉ែត"),
    ("សុញញកស", "សុញ្ញាកាស"),
    ("សុញញ កស", "សុញ្ញាកាស"),
    ("î@តង់", "ឱ្យត្រង់"),
    ("រcង", "រវាង"),
    ("េរãងគន", "រៀងៗខ្លួន"),
    ("គិ តជ", "គិតជា"),
    ("េគេ0យ", "គេឱ្យ"),
    ("េគឲយ", "គេឱ្យ"),
    ("េគឱយ", "គេឱ្យ"),
    ("សិ ថត", "ស្ថិត"),
    ("សិ តថ", "ស្ថិត"),
    ("បេងក ត", "បង្កើត"),
    ("បេងតក", "បង្កើត"),
    ("េក តមន", "កើតមាន"),
    ("𝜇%", "\\mu_0"),
    ("𝜇0", "\\mu_0"), # Rule 50: (if in text but intended as var)
    ("𝜇'", "\\mu_r"),
    ("𝜇𝑟", "\\mu_r"),
    ("𝜇-", "\\mu_r"),
    ("𝐵8", "B_H"),
    ("𝐵!", "B_H"),
    ("𝐵\"", "B"),
    ("µT", "\\mu\\text{T}"),
    ("Ω", "\\Omega"),
    ("𝜋", "\\pi"),
    ("× 10\"", "\\times 10"),
    ("10\"#", "10^{-5}"),
    ("10\"&", "10^{-7}"),
    ("10\"*", "10^{-4}"),
    ("10\":", "10^{-3}"),
    ("10\"3B", "10^{-19}"),
    ("10\"3:", "10^{-13}"),
    ("10\")", "10^{-4}"), # User says "or check if it's -4/ -5", but usually 10^{-4} in this context
    ("\\times 10\")", "\\times 10^{-4}"),
    ("10#", "10^5"),
    ("10&", "10^7"),
    ("10D", "10^6"),
]

def apply_fixes(content):
    for old, new in replacements:
        content = content.replace(old, new)
    
    # Context-sensitive replacements
    content = content.replace("ចរន ", "ចរន្ត ")
    content = content.replace("ចរន។", "ចរន្ត។")
    content = content.replace("ចរនអ", "ចរន្តអ")
    
    content = re.sub(r'កំ\s*([A-Z])', r'កាំ \1', content)
    content = content.replace("មានកំ", "មានកាំ")
    content = content.replace("កំនៃ", "កាំនៃ")

    return content

directory = r"C:/IT/kimou/StudyNest/grade12/science/physics_g12/exercise/chapter 3/"
files = [
    "exercise(1-10).html", "exercise(11-20).html", "exercise(21-30).html",
    "exercise(31-40).html", "exercise(41-50).html", "exercise(51-60).html",
    "exercise(61-70).html", "exercise(71-80).html"
]

for filename in files:
    path = os.path.join(directory, filename)
    if os.path.exists(path):
        print(f"Processing {filename}...")
        with open(path, 'r', encoding='utf-8') as f:
            content = f.read()
        
        new_content = apply_fixes(content)
        
        if new_content != content:
            with open(path, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"  Fixed errors in {filename}")
        else:
            print(f"  No errors found in {filename}")
    else:
        print(f"File {filename} not found at {path}")
