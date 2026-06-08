# DEPRECATED: Use fix_ocr.js instead. This file is kept for reference.
import os
import re

replacements = [
    ("េសពé", "ស្ពៀរ"),
    ("េសéព", "ស្ពៀរ"),
    ("ចរនT", "ចរន្ត"),
    ("ចរនអT", "ចរន្ត"),
    ("ចរនà", "ចរន្ត"),
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
    ("𝜇0", "\\mu_0"), 
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
    ("10\")", "10^{-4}"),
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

base_dir = os.path.join(os.path.dirname(os.path.abspath(__file__)), "grade12", "science", "physics_g12", "exercise")
chapters = ["chapter 1", "chapter 2", "chapter 3"]

for chapter in chapters:
    chapter_path = os.path.join(base_dir, chapter)
    if not os.path.exists(chapter_path):
        print(f"Chapter directory {chapter} not found.")
        continue

    for root, dirs, files in os.walk(chapter_path):
        for filename in files:
            if filename.endswith(".html"):
                filepath = os.path.join(root, filename)
                print(f"Processing {filepath}...")
                with open(filepath, 'r', encoding='utf-8') as f:
                    content = f.read()
                
                new_content = apply_fixes(content)
                
                if new_content != content:
                    with open(filepath, 'w', encoding='utf-8') as f:
                        f.write(new_content)
                    print(f"  Fixed errors in {filename}")
                else:
                    print(f"  No errors found in {filename}")
