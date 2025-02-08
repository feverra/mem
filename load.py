import requests


def download_image(image_url, save_path="downloaded_image.jpg"):
    try:
        # Set a timeout to avoid hanging
        response = requests.get(image_url, timeout=10)
        if response.status_code == 200:
            with open(save_path, "wb") as file:
                file.write(response.content)
            print(f"Image downloaded successfully: {save_path}")
        elif response.status_code == 404:
            print("Error 404: Image not found.")
        else:
            print(
                f"Failed to download image. HTTP Status Code: {response.status_code}")
    except requests.exceptions.RequestException as e:
        print(f"Error: {e}")


# Example usage
image_url = "https://example.com/nonexistent.jpg"


for i in range(140):
    if i == 0:
        continue
    url = f'https://www.thisismymk.com/imgs/mk/{i}'
    # print(url)
    response = requests.get(url, timeout=10)
    if response.status_code == 200:
        print(f"{url}")

# download_image(image_url)
