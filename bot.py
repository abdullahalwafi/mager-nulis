# Importing the PIL library
from PIL import Image
from PIL import ImageDraw
from PIL import ImageFont

# Open an Image
img = Image.open('kertas.jpg')
nama = "abdullah AL Wafiaku"
nim = "0110222103"
rombel = "TI03"
datenow = "Kamis, 20 Oktober 2022"
# Call draw Method to add 2D graphics in an image
data = ImageDraw.Draw(img)
tanggal = ImageDraw.Draw(img)
isi = ImageDraw.Draw(img)

font = ImageFont.truetype("kalam.ttf", 48)
with open('isi.txt', 'r', encoding='utf-8') as viewText:  # Membaca File Tulisan.txt
    textIsi = viewText.read()
# Add Text to an image
data.text((100, 270), "Nama    : " + nama + "\nNim      : " +
          nim + "\nRombel  : " + rombel, fill=(0, 0, 0), font=font)
tanggal.text((1670, 335), datenow, fill=(0, 0, 0), font=font)
isi.text((350, 522), textIsi, fill=(0, 0, 0), font=font, spacing=40)

# Display edited image
img.show()

# Save the edited image
img.save("hasil.png")


